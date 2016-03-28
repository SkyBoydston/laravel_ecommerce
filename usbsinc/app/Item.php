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
			'number',
			'option_1',
			'option_2',
			'option_3',
			'option_4',
			'option_5',
			'option_6',
			'how_many_screws',
			'shipping_weight',
            'base_price',
                        
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
