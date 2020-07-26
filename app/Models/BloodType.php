<?php

namespace App\Models;

use App\Models\Client;
use App\Models\DonationRequest;
use Illuminate\Database\Eloquent\Model;

class BloodType extends Model
{
    protected $table = 'blood_types';
    protected $fillable = ['name'];

    public function clients()
    {
        return $this->belongsToMany(Client::class);
    }

    public function donations()
    {
        return $this->hasMany(DonationRequest::class, 'blood_type_id');
    }
}
