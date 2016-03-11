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
            
            'first_name', 'last_name', 'email', 'password', 'name',
            
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function company() {
        return $this->hasOne('App\Company');
    }

    public function phone_number() {
        return $this->hasOne('App\PhoneNumber');
    }    

}
