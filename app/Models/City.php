<?php

namespace App\Models;

use App\Models\Client;
use App\Models\Governorate;
use App\Models\DonationRequest;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';
    protected $fillable = ['name', 'governorate_id'];

    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    public function donations()
    {
        return $this->hasMany(DonationRequest::class);
    }

    public function governorate()
    {
        return $this->belongsTo(Governorate::class, 'governorate_id');
    }
}
