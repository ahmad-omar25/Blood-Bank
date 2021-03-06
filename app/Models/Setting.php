<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';
    protected $fillable = [
        'facebook_url',
        'twitter_url',
        'instagram_url',
        'about_app', 'whatsapp',
        'google_url',
        'youtube_url',
        'phone',
        'email'
    ];
}
