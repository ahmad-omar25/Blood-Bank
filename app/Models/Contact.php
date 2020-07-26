<?php

namespace App\Models;

use App\Models\Client;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    protected $fillable = ['client_id', 'title', 'message'];

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
}
