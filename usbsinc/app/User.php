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
            
            'first_name', 'last_name', 'email', 'password', 'name', 'company_id', 'role',
            
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
        return $this->belongsTo('App\Company');
    }

    public function phone_number() {
        return $this->hasOne('App\PhoneNumber');
    }    

    public function hasRole($role) {
        return $this->role == $role;
    }

}
