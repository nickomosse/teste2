<?php

namespace App\Http\Controllers\Auth\Admin;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\ServiceType;

class UserController extends Controller
{
    public function index(){
        $users = User::all();

        return view('Admin.Users.index', [
            'users' => $users,
        ]);
    }

    public function create(){
        return view('Admin.Users.create');
    }

    public function show($id) {
        $user = User::find($id);

        return view('Admin.Users.show', [
            'user' => $user,
        ]);

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

    public function edit($id) {
        $user = User::find($id);
        $serviceTypes = ServiceType::all();

        return view('Admin.Users.edit', [
            'user' => $user,
            'serviceTypes' => $serviceTypes,
        ]);
    }

    public function update(Request $request, $id){
        $user = User::find($id);

        if (!$id) {
            return back();
        }

        $user->companyName = $request->companyName;
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->adress = $request->adress;
        $user->email = $request->email;

        $user->save();


        return redirect()->route('users.index');
    }

    public function destroy($id) {
        $user = User::find($id);

        $user->delete();

        return redirect()->route('users.index');

    }
}
