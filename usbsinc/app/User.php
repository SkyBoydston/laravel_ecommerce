<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
            
            'first_name', 'last_name', 'email', 'password', 'name', 'company_id', 'role', 'access_code', 'deleted_at'
            
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = ['deleted_at'];

    public function company() {
        return $this->belongsTo('App\Company');
    }

    public function phone_number() {
        return $this->hasOne('App\PhoneNumber');
    }    

    public function hasRole($role) {
        return $this->role == $role;
    }

    public function sale_documents() {
        return $this->hasMany('App\SaleDocument');
    }

    public function scopeApplicant($query) {
        return $query->where('role', 'company')->orWhere('role', 'denied');
    }

}
