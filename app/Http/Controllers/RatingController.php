<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Service;
use App\Rating;
use App\User;

class RatingController extends Controller
{
    public function index(){
        $user_id = Auth::user()->id;
        $user = User::find($user_id);

        $ratings = Rating::where('user_id', $user_id)->get();

        return view('Ratings.index', [
            'user' => $user,
            'ratings' => $ratings
        ]);
    }

    public function create($id){
        $service = Service::find($id);

        if (!$service) redirect()->back();

        return view('Ratings.create', [
            'service' => $service,
        ]);
    }

    public function store(Request $request, $id){
        $service = Service::find($id);

        if (!$service) redirect()->back();

        $rating = new Rating;
        $rating->text = $request->ratingtext;
        $rating->user_id = Auth::user()->id;
        $rating->service_id = $service->id;
        $rating->direct = true;
        $rating->save();

        return redirect()->route('g.services.show', $service->id);
    }

    public function edit($id, $rating){
        $service = Service::find($id);
        $rating = Rating::find($rating);

        if (!$service) return back();

        return view('Ratings.edit', [
            'service' => $service,
            'rating' => $rating,
        ]);
    }

    public function update(Request $request, $id){
        $rating = Rating::find($id);
        if (!$rating) redirect()->back();

        $rating->text = $request->ratingtext;
        $rating->save();

        return redirect()->route('g.myratings.index');
    }

    public function destroy($id){
        $rating = Rating::find($id);

        //Delete only if the rating is not the only one for the service.
        if(count($rating->service->ratings) > 1) {
            $rating->delete();
        }

        return redirect()->back();
    }
}
