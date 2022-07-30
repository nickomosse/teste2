<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Service;

class Rating extends Model
{
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function service(){
        return $this->belongsTo(Service::class, 'service_id');
    }
}
