<?php

namespace App\Models;

use App\Models\Client;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table = 'notifications';
    protected $fillable = ['title', 'content', 'donation_request_id'];

    public function clients()
    {
        return $this->belongsToMany(Client::class)->withPivot('is_read');
    }
}
