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

    /**
     * Get all applicable price modifiers to an item and apply them. Items can have modifiers from three 
     * sources: the company they belong to, the user that's adding them to a sale document, or the retail 
     * quote. This accounts for all of those sources using only the user_id and sale_document_id, if there 
     * is one. 
     *
     * When the modifiers are applied, it's assumed that all of the modifiers selected should be applied, i.e.
     * all of the correct modifiers have been selected by the query. It also assumes that the additive/subtractive
     * modifiers should be applied last because that's the way the business logic dictates that prices should be
     * calculated when viewing, for instance, a quote vs. a retail quote.
     *
     * A sale_document_id should only be applied if the user is viewing a retail_quote.
     *
     * 
     */
    public function mod_price($user_id, $sale_document_id = null) {
        if (User::findOrFail($user_id)->hasRole('admin')) {
            return $this->base_price;
        } else {              
            $mods = Price::where(function ($query) use ($user_id) {
                                $query->where('company_id', User::findOrFail($user_id)->company->id)
                                           ->where(function ($query) {
                                                   $query->where('brand', $this->brand)
                                                   ->orWhere('category', $this->category);
                                           });
                                       })
                                ->orWhere(function ($query) use ($user_id) {
                                            $query->where('user_id', $user_id)
                                           ->where(function ($query) {
                                                   $query->where('brand', $this->brand)
                                                   ->orWhere('category', $this->category);
                                           });
                                       })
                                           ->orWhere(function ($query) use ($sale_document_id) {  // This is only possible because individual items will only ever have price modifiers on the retail quote, i.e. the sale document.
                                                $query->where('sale_document_id', $sale_document_id)
                                                ->where('item_id', $this->id);
                                           })
                           ->get();
            
            
            $mod_price = $this->base_price;

            foreach ($mods as $mod) {  // Apply the modifications to the base_price
                
                    $mod_price = $mod_price * $mod->price_modifier_percentage;  
            }
            foreach ($mods as $mod) {  // Breaking these into two groups ensures that additive and subtractive modifiers are applied _after_ multiplicative modifiers. Since additive mods should only be applied to retail quotes, the last step in the price change progression, this ensures that the order of operations doesn't have an adverse effect on the modified price. For example, if the agent has a markup of 2x across the board from the company and wants to mark up an item an additional $50.00 to his customer, we need to apply the $50.00 last so that it doesn't get doubled by the markup from the company.
                    $mod_price = $mod_price + $mod->price_modifier_amount;
            }

            return $mod_price;  
        }
    }

}
