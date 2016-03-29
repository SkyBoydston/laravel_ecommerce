<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
            'category',
            'brand',
            'name',
			'number',
            'base_price',
            'image',
                        
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    public function sale_documents() {
    	return $this->belongsToMany('App\SaleDocument');
    }

}
