<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    public function services(){
        return $this->hasMany(Service::class, 'serviceType_id');
    }
}
