<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\City;
use App\Models\Post;
use App\Models\Token;
use App\Models\Report;
use App\Models\Contact;
use App\Models\Notification;
use App\Models\DonationRequest;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Client extends Authenticatable
{
    use Notifiable;

    protected $table = 'clients';
    protected $hidden = ['password', 'api_token'];
    protected $fillable = [
        'name',
        'email',
        'birth_date',
        'city_id',
        'blood_type_id',
        'phone',
        'password',
        'is_active',
        'donation_last_date',
        'pin_code'
    ];
    protected $appends = ['can_donate'];

    //    public function setPasswordAttribute($value)
    //    {
    //        $this->attributes['password'] = bcrypt($value);
    //    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function requests()
    {
        return $this->hasMany(DonationRequest::class);
    }

    public function notifications()
    {
        return $this->belongsToMany(Notification::class)->withPivot('is_read');
    }

    public function favourites()
    {
        return $this->belongsToMany(Post::class);
    }

    public function reports()
    {
        return $this->hasMany(Report::class);
    }

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    public function bloodtypes()
    {
        return $this->belongsToMany('App\Models\BloodType', 'blood_type_client', 'client_id', 'blood_type_id');
    }

    public function governorates()
    {
        return $this->belongsToMany('App\Models\Governorate', 'client_governorate', 'client_id', 'governorate_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function bloodType()
    {
        return $this->belongsTo('App\Models\BloodType', 'blood_type_id');
    }


    public function tokens()
    {
        return $this->hasMany(Token::class);
    }


    public function getCanDonateAttribute()
    {
        $now = Carbon::now();
        $before3Months = $now->subMonths(3);
        $lastDonation = Carbon::createFromFormat('Y-m-d', $this->donation_last_date);
        if ($lastDonation->lessThanOrEqualTo($before3Months)) {
            return true;
        }
        return false;
    }
}
