<?php

namespace App\Models;

use App\Models\City;
use App\Models\Client;
use Illuminate\Database\Eloquent\Model;

class Governorate extends Model
{
    protected $table = 'governorates';
    protected $fillable = ['name'];

    public function cities()
    {
        return $this->hasMany(City::class, 'governorate_id');
    }
    public function clients()
    {
        return $this->belongsToMany(Client::class);
    }
}
