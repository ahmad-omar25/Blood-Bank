<?php

namespace App\Models;

use App\Models\Client;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'reports';
    protected $fillable = ['client_id', 'message'];

    public function  client()
    {
        return $this->belongsTo(Client::class);
    }
}
