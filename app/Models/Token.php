<?php

namespace App\Models;

use App\Models\Client;
use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    protected $table = 'tokens';
    protected $fillable = [
        'client_id',
        'token',
        'platform'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
}
