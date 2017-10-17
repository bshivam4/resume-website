<?php

namespace App\Http\Controllers;

use App\BasicProfile;
use App\Education;
use App\Experience;
use App\Project;
use App\Skill;
use App\Specialization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomePageController extends Controller
{
    public function index(){
        $basic_profile=BasicProfile::first();
        $educations=Education::get();
        $experiences=Experience::orderBy('serial','desc')->get();
        $specializations=Specialization::orderBy('serial')->get();
        $skills_titles=Skill::select('title')->distinct()->get();
        $i=0;
        $skills=[];
        foreach ($skills_titles as $skills_title){
            $skills[$i]['title']=$skills_title->title;
            $skills[$i]['serial']=$i;

            $sub_skills=Skill::where('title',$skills_title->title)->get();
            $j=0;
            foreach ($sub_skills as $sub_skill){
                $skills[$i]['subtitle'][$j]['name']=$sub_skill->sub_title;
                $skills[$i]['subtitle'][$j]['percentage']=$sub_skill->percentage;
                $j++;
            }
            $i++;
        }
        //return $skills;

        $projects=Project::orderBy('serial')->get();

        return view('home',compact('basic_profile','educations','experiences','specializations','skills','projects'));
    }
}
