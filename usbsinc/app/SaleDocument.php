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

    public function status($quote) {
        if ($quote->submitted_for_approval == '0000-00-00 00:00:00') 
        {
            $status = 'Ready to be submitted';
        } elseif ($quote->submitted_for_approval != '0000-00-00 00:00:00' 
                  && $quote->contact_requested == '0000-00-00 00:00:00' 
                  && $quote->approved == '0000-00-00 00:00:00') 
        {
            $status = 'Pending';
        } elseif ($quote->contact_requested != '0000-00-00 00:00:00') 
        {
            $status = 'Contact representative';
        } elseif ($quote->approved != '0000-00-00 00:00:00')
        {
            $status = 'Approved';
        } elseif ($quote->approved != '0000-00-00 00:00:00'
                 && $quote->estimated_arrival == '0000-00-00 00:00:00'
                 && $quote->estimated_shipping_date == '0000-00-00 00:00:00')
        {
            if (Auth::user()->hasRole('admin')) {
                $status = 'Pending';
            } else {
                $status = 'Processing';
            }
        } elseif (($quote->estimated_arrival != '0000-00-00 00:00:00'
                 || $quote->estimated_shipping_date != '0000-00-00 00:00:00')
                 && $quote->shipped == '0000-00-00 00:00:00')
        {
            $status = 'In production';
        } elseif ($quote->shipped != '0000-00-00 00:00:00'
                 && $quote->delivered == '0000-00-00 00:00:00')
        {
            $status = 'In transit';
        } elseif ($quote->delivered != '0000-00-00 00:00:00') 
        {
            $status = 'Delivered';
        } else {
            $status = 'An error has occurred. Please contact your site administrator.';
        }

        return $status;
    }



    public function total($quote) {
        $items = $quote->items()->get();
        
        $total = 0;
        foreach ($items as $item) {
            
            $total = $total + $item->base_price;  // This is only temporary until the price system is set up and we can be addign up the right prices.
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

}
