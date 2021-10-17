<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class CourseController extends BaseController
{
    function dashboard(){
    	return view('jobs.dashboard');
    }

    function newcourse(){
    	return view('course.newcourse');
    }

    function list(){
    	return view('course.courselist');
    }
    
    function category(){
    	return view('course.category');
    }
    function detail(){
    	return view('course.detailcourse');
    }

    
}