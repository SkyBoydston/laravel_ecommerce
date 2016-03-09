<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
            'user_id',
            'business_name',
            'website',
            'type',
            'status',
            'brands_of_interest', 
            'contact_me_via',
            'how_heard_about',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    public function address() {
    	$this->hasMany('App\Address');
    }

    public function phone_number() {
    	$this->hasOne('App\PhoneNumber');
    }
}
