<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\AccessLogs;

class AccessLogsController extends Controller
{
    public function index() {
        $logs = AccessLogs::all();



        return view('Admin.AccessLogs.index', [
            'logs' => $logs
        ]);
    }
}
