<?php

namespace App\Http\Controllers\HRD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardHRDController extends Controller
{
    public function index(){
        return view('HRD.dashboard.dashboard');
    }
}
