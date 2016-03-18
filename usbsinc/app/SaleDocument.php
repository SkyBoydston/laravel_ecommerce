<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
             'converted_to_order',
             'converted_to_retail_quote',
             'shipped',
             'estimated_arrival'
                        
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
    ];



    public function scopeIsOrder($query) {
    	return $query->where('converted_to_order', '!=', '0000-00-00 00:00:00');
    }

    public function scopeIsQuote($query) {
    	return $query->where('converted_to_order', '=', '0000-00-00 00:00:00');
    }



    public function user() {
    	return $this->belongsTo('App\User');
    }

    public function items() {
    	return $this->hasMany('App\Item');
    }

}
