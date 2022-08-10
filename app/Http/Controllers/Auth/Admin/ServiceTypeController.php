<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ServiceType;

class ServiceTypeController extends Controller
{
    public function index(){
        $serviceTypes = ServiceType::all();

        return view('Admin.ServiceTypes.index', [
            'serviceTypes' => $serviceTypes,
        ]);
    }

    public function create(){
        return view('Admin.ServiceTypes.create');
    }

    public function store(Request $request){
        $serviceType = new ServiceType;

        $serviceType->name = $request->name;
        $serviceType->save();

        return redirect()->route('servicetypes.index');
    }

    public function edit($id){
        $serviceType = ServiceType::find($id);

        if (!$id) {
            return back();
        }

        return view('Admin.ServiceTypes.edit', [
            'serviceType' => $serviceType,
        ]);
    }

    public function update(Request $request, $id){
        $serviceType = ServiceType::find($id);

        if (!$id) {
            return back();
        }

        $serviceType->name = $request->name;
        $serviceType->save();

        return redirect()->route('servicetypes.index');
    }

    public function show($id){
        $serviceType = ServiceType::find($id);

        if (!$id) {
            return back();
        }

        return view('Admin.ServiceTypes.show', [
            'serviceType' => $serviceType,
        ]);
    }

    public function destroy($id){
        $serviceType = ServiceType::find($id);

        $serviceType->delete();

        return redirect()->route('servicetypes.index');
    }
}
