<?php

namespace App\Http\Controllers;
use App\Event;
use App\eventtype;
use App\rewardevent;
use App\categoryevent;
use App\expert;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Yajra\DataTables\DataTables;

class EventController extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // public function datatables()
    // {
    //     return datatables( Event::all())->toJson();
    // }

    function list(Request $request)
    {
        // $eventtype = eventtype::all();
        // $rewardevent = rewardevent::all();
        // $categoryevent = categoryevent::all();
        // $expert = expert::all();

        // $Event = Event::with(['expert','categoryevent','rewardevent','eventtype'])->get();
        // // var_dump($category);
        // if($request->ajax()){
        //     return datatables()->of($Event)
        //     ->addcolumn('action',function($data){
        //         $button = '<a href="javascript:void(0)" data-toggle="tootip"  data-id="'.$data->id.'" data-original-title="Edit" class="edit btn btn-info btn-sm edit-post"><i class="far fa-edit"></i> Edit</a>';
        //         $button .= '&nbsp;&nbsp;';
        //         $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> Delete</button>';
        //         return $button;
        //     })
        //     ->addColumn('image', function ($image) {
        //         $url=asset("frontend/img/upload/employee/$image->image");
        //         return '<img src='.$url.' border="0" width="40" class="img-rounded" align="center" />';
        //     })
        //     // ->addcolumn('image','image')
        //     ->rawColumns(['action','image'])
        //     ->addIndexColumn()
        //     ->make(true);
        // }

        // return view('event.eventlist',compact('eventtype','rewardevent','categoryevent','expert', 'event'));

        // $eventtype = eventtype::all();
        // $rewardevent = rewardevent::all();
        // $categoryevent = categoryevent::all();
        // $expert = expert::all();

        $event = Event::with(['expert','categoryevent','rewardevent','eventtype'])->get();
        return view('event.eventlist',compact('event'));

    	// return view('event.eventlist');
    }
    function dashboard(){
    	return view('event.dashboard');
    }

    function newevent(){
        $event_type = eventtype::all();
        $reward_event = rewardevent::all();
        $category_event = categoryevent::all();
        $speaker = expert::all();
        return view('event.newevent',compact('event_type','reward_event','category_event','speaker'));
        // return view('event.newevent');
    }

    function store(Request $request)
    {


        $details = [
            // 'kd_company' => helpers::mkeyHelpers('m_company'),
            'event_name' => $request->event_name,
            'category_event_id' => $request->category_event_id,
            'event_type' => $request->event_type_id,
            'price' => $request->price,
            'venue' => $request->venue,
            'speaker' => $request->speaker,
            'reward_event_id' => $request->reward_event,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'content' => $request->content,
            
        ];

        if ($files = $request->file('image')) {
            $profileImage =  date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move(public_path('img/upload/m_company/'), $profileImage);
            $details['image'] = $profileImage;
        }


        Event::Create($details);

        return redirect('/admin/event/list-event');
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

    public function delete($event_id)
{
    $event = Event::find($event_id);
    $event->delete();
    return redirect('/admin/event/list-event');
}

    
}