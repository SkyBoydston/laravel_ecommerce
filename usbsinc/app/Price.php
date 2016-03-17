<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
            'price',
            'answer_id'
                        
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    public function answer() {
    	return $this->belongsTo('App\Answer');
    }

}
