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
            'user_id',
            'company_id',
            'item_id',
            'sale_document_id',
            'brand',
            'category',
            'price_modifier_percentage',
            'price_modifier_amount',

           
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    

}
