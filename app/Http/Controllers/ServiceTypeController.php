<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiceType;
use App\Service;

class ServiceTypeController extends Controller
{
    public function index(){
        $serviceTypes = ServiceType::all();
        return view('ServiceTypes.index', [
            'serviceTypes' => $serviceTypes,
        ]);
    }

    public function show($id) {
        $serviceType = ServiceType::find($id);

        if (!$id) {
            return back();
        }

        // $services = Service::where('serviceType_id', $id)->get();
        $services = $serviceType->services;

        return view('servicetypes.show', [
            'serviceType' => $serviceType,
            'services' => $services,
        ]);
    }
}
