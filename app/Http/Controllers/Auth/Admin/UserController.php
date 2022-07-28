<?php

namespace App\Http\Controllers\Auth\Admin;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all();

        return view('admin.users.index', [
            'users' => $users,
        ]);
    }

    public function create(){
        return view('admin.users.create');
    }

    public function store(Request $request){
        $data = $request->only([
            'name',
            'companyName',
            'phone',
            'adress',
            'email',
        ]);
        $data['phone'] = preg_replace('/[^0-9]/', '', $request->phone);

        $validator = Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'companyName' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['string', 'email', 'max:255', 'unique:users'],
            'adress' => ['string', 'string', 'max:255'],
        ]);

        if($validator->fails()){
            return redirect()->route('users.create')
            ->withErrors($validator)
            ->withInput();
        }

        $user = new User;
        $user->name = $request->name;
        $user->companyName = $request->companyName;
        $user->phone = $data['phone'];
        $user->adress = $request->adress;
        $user->email = $request->email;
        $user->password = bcrypt($data['phone']);
        $user->save();


        return redirect()->route('users.index');
    }
}
