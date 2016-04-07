<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Company;

class SaleDocument extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
            'user_id',	
            'number',
            'client_reference',
            'submitted_for_approval',
            'contact_requested',
            'approved',
            'converted_to_order',
            'converted_to_retail_quote',
            'estimated_shipping_date',
            'estimated_arrival',
            'shipped',
            'delivered',
                        
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
    ];


    



    /**
     * Get the uppercase version of the client reference.
     *
     * @param  string  $value
     * @return string
     */
    public function getClientReferenceAttribute($value)
    {
        return ucwords($value);
    }

    /**
     * Set the client reference to lowercase in the db.
     *
     * @param  string  $value
     * @return string
     */
    public function setClientReferenceAttribute($value)
    {
        $this->attributes['client_reference'] = strtolower($value);
    }







    /**
     * Determine the status of the sale document based on timestamps and return it in
     * a human readable format.
     *
     *
     * 
     */

    public function status($sale_document) {
        if ($sale_document->submitted_for_approval == '0000-00-00 00:00:00') 
        {
            $status = 'Ready to be submitted';
        } elseif ($sale_document->submitted_for_approval != '0000-00-00 00:00:00' 
                  && $sale_document->contact_requested == '0000-00-00 00:00:00' 
                  && $sale_document->approved == '0000-00-00 00:00:00') 
        {
            $status = 'Pending';
        } elseif ($sale_document->contact_requested != '0000-00-00 00:00:00') 
        {
            $status = 'Contact representative';
        } elseif ($sale_document->approved != '0000-00-00 00:00:00')
        {
            $status = 'Approved';
        } elseif ($sale_document->approved != '0000-00-00 00:00:00'
                 && $sale_document->estimated_arrival == '0000-00-00 00:00:00'
                 && $sale_document->estimated_shipping_date == '0000-00-00 00:00:00')
        {
            if (Auth::user()->hasRole('admin')) {
                $status = 'Pending';
            } else {
                $status = 'Processing';
            }
        } elseif (($sale_document->estimated_arrival != '0000-00-00 00:00:00'
                 || $sale_document->estimated_shipping_date != '0000-00-00 00:00:00')
                 && $sale_document->shipped == '0000-00-00 00:00:00')
        {
            $status = 'In production';
        } elseif ($sale_document->shipped != '0000-00-00 00:00:00'
                 && $sale_document->delivered == '0000-00-00 00:00:00')
        {
            $status = 'In transit';
        } elseif ($sale_document->delivered != '0000-00-00 00:00:00') 
        {
            $status = 'Delivered';
        } else {
            $status = 'An error has occurred. Please contact your site administrator.';
        }

        return $status;
    }

    /**
     * Calculate the total value of a sale document based on the final prices of the retail quote, if 
     * there is one, or the modified prices of items based on their user's company and id if there is no
     * retail quote.
     * 
     */

    public function total($sale_document) {
        $items = $sale_document->items()->get();
        
        $total = 0;
        foreach ($items as $item) {
            
            $total = $total + $item->mod_price($sale_document->user->id, $sale_document->id);  
        }
        return '$' . number_format($total, 2);
    }





    public function scopeSubmitted($query) {  // This is used in the controller to display the right quotes to the inbox
        return $query->where('submitted_for_approval', '!=', '0000-00-00 00:00:00');
    }





    public function scopeReadyToBeSubmitted($query) {
        return $query->where('submitted_for_approval', '=', '0000-00-00 00:00:00');
    }

    public function scopePendingQuote($query) {
        return $query->where('submitted_for_approval', '!=', '0000-00-00 00:00:00')
                     ->where('contact_requested', '=', '0000-00-00 00:00:00')
                     ->where('approved', '=', '0000-00-00 00:00:00');
    }

    public function scopeContactRequested($query) {
        return $query->where('contact_requested', '!=', '0000-00-00 00:00:00');
    }

    public function scopeQuoteApproved($query) {
        return $query->where('approved', '!=', '0000-00-00 00:00:00');
    }

    public function scopePendingOrder($query) {  // This represents the processing status for an agent and a pending status for the admin
        return $query->where('approved', '!=', '0000-00-00 00:00:00')
                     ->where('estimated_arrival', '=', '0000-00-00 00:00:00')
                     ->where('estimated_shipping_date', '=', '0000-00-00 00:00:00');
    }

    public function scopeInProduction($query) {
        return $query->where('estimated_arrival', '!=', '0000-00-00 00:00:00')
                     ->orWhere('estimated_shipping_date', '!=', '0000-00-00 00:00:00');
    }

    public function scopeInTransit($query) {
        return $query->where('shipped', '!=', '0000-00-00 00:00:00')
                     ->where('delivered', '=', '0000-00-00 00:00:00');
    }

    public function scopeDelivered($query) {
        return $query->where('delivered', '!=', '0000-00-00 00:00:00');
    }






    public function scopeIsOrder($query) {
    	return $query->where('converted_to_order', '!=', '0000-00-00 00:00:00');
    }

    public function scopeIsQuote($query) {
    	return $query->where('converted_to_order', '=', '0000-00-00 00:00:00');
    }

    public function scopeIsRetailQuote($query) {
        return $query->where('converted_to_retail_quote', '!=', '0000-00-00 00:00:00');
    }

    public function scopeBelongsToCompany($query, $company_id) {  // Pretty sure this gets all quotes that belong to a company
        $company_users = Company::findOrFail($company_id)->user()->get();
        $ids_of_users_in_company = array();
        foreach ($company_users as $company_user) {
            $ids_of_users_in_company[] = $company_user->id;
        }
        return $query->whereIn('user_id', $ids_of_users_in_company);
    }


    public function user() {
    	return $this->belongsTo('App\User');
    }

    public function items() {
    	return $this->belongsToMany('App\Item');
    }

    public function prices() {
        return $this->hasMany('App\Price');
    }

}
