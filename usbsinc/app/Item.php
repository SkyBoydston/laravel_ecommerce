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

    public function mod_price($user_id) {
        if (User::findOrFail($user_id)->hasRole('admin')) {
            return $this->base_price;
        } else {
            $mods = Price::where('company_id', User::findOrFail($user_id)->company->id)
                           ->where('brand', $this->brand)->get();
                           // ->where('category', $this->category)
                           // ->get();
            dd($mods);
            return 1;
        }
    }

}
