<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class ReportController extends BaseController
{
    function transaction(){
    	return view('report.transaction');
    }


    
}