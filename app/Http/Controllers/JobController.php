<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class JobController extends BaseController
{
    function dashboard(){
    	return view('jobs.dashboard');
    }

    function newjobs(){
    	return view('jobs.newjob');
    }

    function list(){
    	return view('jobs.joblist');
    }
    
    function category(){
    	return view('jobs.category');
    }
    function detail(){
    	return view('jobs.detailjob');
    }
    function listmember(){
    	return view('jobs.listmemberjob');
    }

    
}