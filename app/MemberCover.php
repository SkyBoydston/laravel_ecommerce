<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberCover extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
            
            'news', 'webinars', 'promotions', 'financial', 'social_media_links'
            
    ];
}
