<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
       //dd('done');
        return view('backend.pages.dashboard.index');

        // return view('backend.layouts.home');
    }
}
