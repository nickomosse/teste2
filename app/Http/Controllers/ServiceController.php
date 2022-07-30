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

    public function search(Request $request){
        $resultsServices = Service::where('name', 'LIKE', "%{$request->search}%")->get();
        $resultsServiceTypes = ServiceType::where('name', 'LIKE', "%{$request->search}%")->get();

        foreach ($resultsServiceTypes as $serviceType) {
            $id = $serviceType->id;
            $services = Service::where('serviceType_id', $id)->get();

            $resultsServices = $resultsServices->merge($services);
        }

        return view('services.search', [
            'services' => $resultsServices,
        ]);
    }

    public function show($id){
        $service = Service::find($id);

        if (!$id) {
            return back();
        }

        $ratings = $service->ratings;
        $myRating = $ratings->where('user_id', Auth::user()->id);
        $haveRating = false;

        //Remove the user Rating from the list
        $ratings = $ratings->diff($myRating);


        if (count($myRating) == 1) {
            $haveRating = true;
            $myRating = $myRating->first();
        }

        return view('services.show', [
            'service' => $service,
            'ratings' => $ratings,
            'myRating' => $myRating,
            'haveRating' => $haveRating,

        ]);
    }
}
