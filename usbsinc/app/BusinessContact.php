<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessContact extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
            'first_name', 
            'last_name',
            'title',            
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    // public function company() {
    //     $this->belongsToOne('App\Company');
    // }

    public function phone_number() {
    	return $this->hasOne('App\PhoneNumber');
    }

    // public function getFirstNameAttribute() {
    //     return $this->first_name;
    // }
}
