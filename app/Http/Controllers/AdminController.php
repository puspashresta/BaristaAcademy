<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;
use App\Models\Team;
use App\Models\About;
use App\Models\Service;
use App\Models\Menu;
use App\Models\Event;
use App\Models\Current_Event;

class AdminController extends Controller
{
    public function index(){
    	$courses = Course::all();
    	$teams = Team::all();
    	return view('/home')->with(compact('courses','teams'));
    }

    public function abouts(){
    	$teamss = Team::all();
    	$abouts = About::all();
    	return view('/about')->with(compact('teamss','abouts'));
    }

    public function services(){
        $service = Service::all();
        return view('/services')->with(compact('service'));
    }
    public function menuss(){
        $menuj = Menu::all();
        return view('/menu')->with(compact('menuj'));
    }
    public function events(){
        $ebent = Event::all();
        return view('/upcoming_event')->with(compact('ebent'));
    //     @if($is_current = "True"){
    //         return view('current_event')->with(compact('ebent'));
    //     }
    //     @else{
    //         return view('upcoming_event')->with(compact('ebent'));
    //     }
    // }
    // @endif

    }
    public function curent(){
        $curentevent = Current_Event::all();
        return view('/current_event')->with(compact('curentevent'));
    }

}