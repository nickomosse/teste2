<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service;
use App\ServiceType;
use App\User;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::all();

        return view('admin.services.index', [
            'services' => $services,
        ]);
    }

    public function create(){
        $serviceTypes = ServiceType::all();
        $users = User::all();

        return view('admin.services.create', [
            'serviceTypes' => $serviceTypes,
            'users' => $users,
        ]);
    }

    public function store(Request $request){
        $service = new Service;

        $service->name = $request->name;
        $service->providerName = $request->providerName;
        $service->providerPhone = $request->providerPhone;
        $service->serviceType_id = $request->serviceType_id;
        $service->user_id = $request->user_id;
        $service->direct = true;
        $service->save();

        return redirect()->route('services.index');
    }

    public function edit($id){
        $service = Service::find($id);
        $serviceTypes = ServiceType::all();
        $users = User::all();

        if (!$id) {
            return back();
        }

        return view('admin.services.edit', [
            'service' => $service,
            'serviceTypes' => $serviceTypes,
            'users' => $users,
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

        return redirect()->route('services.index');
    }

    public function show($id){
        $service = Service::with('serviceType')->find($id);

        if (!$id) {
            return back();
        }

        dd($service->serviceType);
        return view('admin.services.show', [
            'service' => $service,
        ]);
    }

    public function destroy($id){
        $service = Service::find($id);

        $service->delete();

        return redirect()->route('services.index');
    }
}
