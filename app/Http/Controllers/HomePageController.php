<?php

namespace App\Http\Controllers;

use App\BasicProfile;
use App\Education;
use App\Experience;
use App\Specialization;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
        $basic_profile=BasicProfile::first();
        $educations=Education::get();
        $experiences=Experience::orderBy('serial','desc')->get();
        $specializations=Specialization::orderBy('serial')->get();
        return view('home',compact('basic_profile','educations','experiences','specializations'));
    }
}
