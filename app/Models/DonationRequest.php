<?php

namespace App\Models;

use App\Models\City;
use App\Models\Client;
use App\Models\BloodType;
use App\Models\Notification;
use Illuminate\Database\Eloquent\Model;

class DonationRequest extends Model
{
    protected $table = 'donation_requests';
    protected $fillable = [
        'client_id',
        'patient_name',
        'patient_age',
        'blood_type_id', 'bags_num',
        'hospital_name',
        'hospital_address',
        'city_id',
        'phone',
        'notes',
        'latitude',
        'longitude'
    ];

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

    public function notification()
    {
        return $this->hasOne(Notification::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function bloodType()
    {
        return $this->belongsTo(BloodType::class, 'blood_type_id');
    }
}
