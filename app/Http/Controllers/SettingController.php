<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class SettingController extends BaseController
{
    function bannerloginphone(){
    	return view('setting.bannerloginphone');
    }
    function bannerhomephone(){
    	return view('setting.bannerhomephone');
    }
    function bannerhomeweb(){
    	return view('setting.bannerhomeweb');
    }


    
}