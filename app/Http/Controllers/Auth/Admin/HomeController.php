<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Service;
use App\ServiceType;
use App\AccessLogs;

class HomeController extends Controller
{
    public function index() {
        $qtdUsers = count(User::all()) - 1;
        $qtdServices = count(Service::all());
        $qtdServiceTypes = count(ServiceType::all());
        $accessLogs = AccessLogs::all();
        $qtdAccessLogs = count($accessLogs);


        return view('Admin.index', [
            "qtdUsers" => $qtdUsers,
            "qtdServices" => $qtdServices,
            "qtdServiceTypes" => $qtdServiceTypes,
            "accessLogs" => $accessLogs,
            "qtdAccessLogs" => $qtdAccessLogs,
        ]);
    }
}
