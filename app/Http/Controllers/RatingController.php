<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Service;
use App\Rating;

class RatingController extends Controller
{
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
        $rating->user = Auth::user();
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

        return redirect()->route('g.services.show', $rating->service->id);
    }
}
