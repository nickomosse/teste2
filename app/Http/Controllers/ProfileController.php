<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;


class ProfileController extends Controller
{
    public function index(){
        $user_id = Auth::user()->id;
        $user = User::find($user_id);

        return view('Profiles.index', [
            'user' => $user,
        ]);
    }

    public function edit(){
        $user = Auth::user();

        return view('Profiles.edit', [
            'user' => $user
        ]);
    }

    public function update(Request $request){
        $user = Auth::user();

        $user->name = $request->name;
        $user->companyName = $request->companyName;
        $user->phone = $request->phone;
        $user->email = $request->email;

        if($request->password) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return view('Profiles.store');
    }
}
