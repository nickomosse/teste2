<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\ServiceType;

class Service extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function serviceType() {
        return $this->belongsTo(ServiceType::class);
    }
}
