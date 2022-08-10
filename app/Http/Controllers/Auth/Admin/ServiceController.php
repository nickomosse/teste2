<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service;
use App\ServiceType;
use App\User;
use App\Rating;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::all();

        return view('Admin.Services.index', [
            'services' => $services,
        ]);
    }

    public function create(){
        $serviceTypes = ServiceType::all();
        $users = User::all();

        return view('Admin.Services.create', [
            'serviceTypes' => $serviceTypes,
            'users' => $users,
        ]);
    }

    public function store(Request $request){
        $service = new Service;
        $rating = new Rating;

        $service->name = $request->name;
        $service->providerName = $request->providerName;
        $service->providerPhone = $request->providerPhone;
        $service->serviceType_id = $request->serviceType_id;
        $service->user_id = $request->user_id;
        $service->direct = true;
        $service->save();

        $rating->text = $request->rating;
        $rating->service_id = $service->id;
        $rating->user_id = $service->user_id;
        $rating->direct = false;
        $rating->save();


        return redirect()->route('services.index');
    }

    public function edit($id){
        $service = Service::find($id);
        $serviceTypes = ServiceType::all();
        $users = User::all();

        if (!$id) {
            return back();
        }

        $rating = $service->ratings->where('user_id', $service->user->id)->first();


        return view('Admin.Services.edit', [
            'service' => $service,
            'serviceTypes' => $serviceTypes,
            'users' => $users,
            'rating' => $rating,
        ]);
    }

    public function update(Request $request, $id){
        $service = Service::find($id);

        if (!$id) {
            return back();
        }

        $service->name = $request->name;
        $service->providerName = $request->providerName;
        $service->providerPhone = $request->providerPhone;
        $service->serviceType_id = $request->serviceType_id;
        $service->user_id = $request->user_id;

        $service->save();

        $rating = $service->ratings->where('user_id', $service->user->id)->first();
        $rating->text = $request->rating;
        $rating->save();

        return redirect()->route('services.index');
    }

    public function show($id){
        $service = Service::find($id);

        if (!$id) {
            return back();
        }
        $rating = $service->ratings->where('user_id', $service->user->id)->first();
        // $serviceType = ServiceType::find($service->serviceType_id);
        // $service->serviceType = $serviceType;

        return view('Admin.Services.show', [
            'service' => $service,
            'rating' => $rating,
        ]);
    }

    public function destroy($id){
        $service = Service::find($id);

        $service->delete();

        return redirect()->route('services.index');
    }
}
