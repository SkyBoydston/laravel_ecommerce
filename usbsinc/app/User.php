<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
            'business_name',
            'business_type',
            'business_status',
            'business_address_line1',
            'business_address_line2',
            'business_city',
            'business_state',
            'business_zip_code',
            'business_contact_first_name', 
            'business_contact_last_name',
            'business_contact_title', 
            'brands_of_interest', 
            'business_primary_phone',
            'business_secondary_phone',
            'contact_me_via',
            'email',
            'how_heard_about', 
            'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
