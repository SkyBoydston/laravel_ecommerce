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

    public function scopeReadyToBeSubmitted($query) {
        return $query->where('submitted_for_approval', '=', '0000-00-00 00:00:00');
    }

    public function scopePendingQuote($query) {
        return $query->where('submitted_for_approval', '!=', '0000-00-00 00:00:00')
                     ->andWhere('contact_requested', '=', '0000-00-00 00:00:00')
                     ->andWhere('approved', '=', '0000-00-00 00:00:00');
    }

    public function scopeContactRequested($query) {
        return $query->where('contact_requested', '!=', '0000-00-00 00:00:00');
    }

    public function scopeQuoteApproved($query) {
        return $query->where('approved', '!=', '0000-00-00 00:00:00');
    }

    public function scopePendingOrder($query) {  // This represents the processing status for an agent and a pending status for the admin
        return $query->where('approved', '!=', '0000-00-00 00:00:00')
                     ->andWhere('estimated_arrival', '=', '0000-00-00 00:00:00')
                     ->andWhere('estimated_shipping_date', '=', '0000-00-00 00:00:00');
    }

    public function scopeInProduction($query) {
        return $query->where('estimated_arrival', '!=', '0000-00-00 00:00:00')
                     ->orWhere('estimated_shipping_date', '!=', '0000-00-00 00:00:00')
                     ->andWhere('shipped', '=', '0000-00-00 00:00:00');
    }

    public function scopeInTransit($query) {
        return $query->where('shipped', '!=', '0000-00-00 00:00:00')
                     ->andWhere('delivered', '=', '0000-00-00 00:00:00');
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

    public function scopeBelongsToCompany($query, $company_id) {
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
