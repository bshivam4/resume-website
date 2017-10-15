<?php

namespace App\Http\Controllers;

use App\BasicProfile;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
        $basic_profile=BasicProfile::first();
        return view('home',compact('basic_profile'));
    }
}
