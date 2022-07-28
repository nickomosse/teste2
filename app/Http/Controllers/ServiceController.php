<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiceType;
use App\Service;
use App\Rating;
use Auth;


class ServiceController extends Controller
{
    public function create(){
        $serviceTypes = ServiceType::all();

        return view('services.create', [
            'serviceTypes' => $serviceTypes,
        ]);
    }

    public function store(Request $request){
        $service = new Service;
        $rating = new Rating;
        $user_id = Auth::user()->id;

        $service->name = $request->name;
        $service->providerName = $request->providerName;
        $service->providerPhone = $request->providerPhone;
        $service->serviceType_id = $request->serviceType_id;
        $service->user_id = $user_id;
        $service->direct = true;
        $service->save();

        $rating->text = $request->rating;
        $rating->service_id = $service->id;
        $rating->user_id = $user_id;
        $rating->direct = true;
        $rating->save();

        return 'ok';
    }
}
