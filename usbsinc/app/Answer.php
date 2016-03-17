<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
            'text',
            'question_id'
                        
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
    ];    

    public function question() {
    	return $this->belongsTo('App\Question');
    }

    public function price() {
    	return $this->hasOne('App\Price');
    }
}
