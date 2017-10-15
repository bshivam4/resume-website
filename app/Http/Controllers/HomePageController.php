<?php

namespace App\Http\Controllers;

use App\BasicProfile;
use App\Education;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
        $basic_profile=BasicProfile::first();
        $educations=Education::get();
        return view('home',compact('basic_profile','educations'));
    }
}
