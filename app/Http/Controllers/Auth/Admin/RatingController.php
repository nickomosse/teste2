<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Rating;
use App\Service;


class RatingController extends Controller
{
    public function index($serviceid) {
        $service = Service::find($serviceid);
        $ratings = $service->ratings;
        $mainRating = $service->ratings->where('user_id', $service->user->id)->first();

        return view('Admin.Ratings.index', [
            'ratings' => $ratings,
            'service' => $service,
            'mainRating' => $mainRating,
        ]);
    }
}
