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
    	return $this->hasMany('App\Address');
    }

    public function phone_number() {
    	return $this->hasOne('App\PhoneNumber');
    }

    public function business_contact() {
        return $this->hasOne('App\BusinessContact');
    }

    public function user() {
        return $this->hasMany('App\User');
    }

    

    
}
