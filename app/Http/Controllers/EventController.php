<?php

namespace App\Http\Controllers;
use App\Event;
use App\eventtype;
use App\rewardevent;
use App\categoryevent;
use App\expert;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class EventController extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function datatables()
    {
        return datatables ( Event::all())->toJson();
    }

    function list(Request $request)
    {
        $eventtype = eventtype::all();
        $rewardevent = rewardevent::all();
        $categoryevent = categoryevent::all();
        $expert = expert::all();

        $Event = Event::with(['expert','categoryevent','rewardevent','eventtype'])->get();
        // var_dump($category);
        if($request->ajax()){
            return datatables()->of($Event)
            ->addcolumn('action',function($data){
                $button = '<a href="javascript:void(0)" data-toggle="tootip"  data-id="'.$data->id.'" data-original-title="Edit" class="edit btn btn-info btn-sm edit-post"><i class="far fa-edit"></i> Edit</a>';
                $button .= '&nbsp;&nbsp;';
                $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> Delete</button>';
                return $button;
            })
            ->addColumn('image', function ($image) {
                $url=asset("frontend/img/upload/employee/$image->image");
                return '<img src='.$url.' border="0" width="40" class="img-rounded" align="center" />';
            })
            // ->addcolumn('image','image')
            ->rawColumns(['action','image'])
            ->addIndexColumn()
            ->make(true);
        }

        return view('backend.employee.home',compact('employee','divition','position','cabang'));

    	return view('event.eventlist');
    }
    function dashboard(){
    	return view('event.dashboard');
    }

    function newevent(){
    	return view('event.newevent');
    }


    
    function category(){
    	return view('event.category');
    }
    function detail(){
    	return view('event.detailevent');
    }
    function reward(){
    	return view('event.rewardlist');
    }

    
}