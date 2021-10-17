<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class UsersController extends BaseController
{
    function dashboard(){
    	return view('users.dashboard');
    }

    function newuser(){
    	return view('users.newuser');
    }

    function memberlist(){
        return view('users.memberlist');
    }
    function clientlist(){
        return view('users.clientlist');
    }
    function expertlist(){
        return view('users.expertlist');
    }
    function partnerlist(){
        return view('users.partnerlist');
    }

    function userlist(){
    	return view('users.userlist');
    }
    
    function detailmember(){
    	return view('users.detailmember');
    }

    
}