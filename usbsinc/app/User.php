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
            'business_address',
            'city',
            'state',
            'zip_code',
            'first_name', 
            'last_name',
            'title', 
            'brands_of_interest', 
            'primary_phone',
            'secondary_phone',
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
