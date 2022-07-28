<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\ServiceType;
use App\Rating;

class Service extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function serviceType() {
        return $this->belongsTo(ServiceType::class, 'serviceType_id');
    }

    public function ratings(){
        return $this->hasMany(Rating::class);
    }
}
