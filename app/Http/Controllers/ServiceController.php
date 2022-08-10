<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiceType;
use App\Service;
use App\Rating;
use App\User;
use Auth;


class ServiceController extends Controller
{
    public function create(){
        $serviceTypes = ServiceType::all();

        return view('Services.create', [
            'serviceTypes' => $serviceTypes,
        ]);
    }

    public function store(Request $request){
        $service = new Service;
        $rating = new Rating;
        $user_id = Auth::user()->id;
        $new_service = true;

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

        if (!$new_service) {
            return 'ok';
        }

        return view('Services.store');
    }

    public function search(Request $request){
        $resultsServices = Service::where('name', 'LIKE', "%{$request->search}%")->get();
        $resultsServiceTypes = ServiceType::where('name', 'LIKE', "%{$request->search}%")->get();

        foreach ($resultsServiceTypes as $serviceType) {
            $id = $serviceType->id;
            $services = Service::where('serviceType_id', $id)->get();

            $resultsServices = $resultsServices->merge($services);
        }

        return view('Services.search', [
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

        return view('Services.show', [
            'service' => $service,
            'ratings' => $ratings,
            'myRating' => $myRating,
            'haveRating' => $haveRating,

        ]);
    }

    public function list() {
        $user_id = Auth::user()->id;
        $user = User::find($user_id);

        //Recommendations
        $services = Service::where('user_id', $user_id)->get();

        //Find the user rating in each recommendation
        foreach ($services as $service) {
            $ratings = $service->ratings;
            foreach ($ratings as $rating) {
                if ($rating->user_id == $user_id) {
                    $service->myrating = $rating;
                    break;
                }
            }
        }



        return view('Services.list', [
            'user' => $user,
            'services' => $services
        ]);
    }

    public function edit($id) {
        $service = Service::find($id);
        $serviceTypes = ServiceType::all();
        return view('Services.edit', [
            'service' => $service,
            'serviceTypes' => $serviceTypes,
        ]);
    }

    public function update(Request $request, $id) {
        $service = Service::find($id);

        $service->providerName = $request->providerName;
        $service->providerPhone = $request->providerPhone;
        $service->name = $request->name;
        $service->serviceType_id = $request->serviceType_id;
        $service->save();

        return redirect()->route('g.myrecommendations.myrecommendations');
    }
}
