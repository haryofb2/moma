<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        // $role = Auth::user()->role_id;
        // // dd($role);
        // if($role == 1){
        //     return redirect('/admin');
        // }
        // else{
        //     return redirect('/user');
        // }
        if(auth()->check() && (auth()->user()->role_id != 1)){
            Auth::logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->route('login')->with('error','you dont have access');
        }

        // return view('dashboard.analytical');
                    return redirect('/admin/dashboard/analytical');

    }
}
