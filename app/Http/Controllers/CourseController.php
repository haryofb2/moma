<?php

namespace App\Http\Controllers;
use App\course;
use App\coursetype;
use App\categorycourse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class CourseController extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function dashboard(){
    	return view('jobs.dashboard');
    }

    function newcourse()
    {
        $categorycourse = categorycourse::all();
        $coursetype = coursetype::all();
    	return view('course.newcourse',compact('categorycourse','coursetype'));
    }

    function list()
    {
        $categorycourse = categorycourse::all();
        $coursetype = coursetype::all();
        $course = course::with(['categorycourse','coursetype'])->get();
    	return view('course.courselist',compact('categorycourse','coursetype','course'));
    }
    
    public function store(Request $request)
    {
        $details = [
            // 'kd_company' => helpers::mkeyHelpers('m_company'),
            'course_name' => $request->course_name,
            'category_course_id' => $request->category_course_id,
            'course_type' => $request->course_type_id,
            'price' => $request->price,
            'venue' => $request->venue,
            // 'speaker' => $request->speaker,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'description' => $request->description,
            
        ];

        if ($files = $request->file('image')) {
            $profileImage =  date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move(public_path('img/upload/m_company/'), $profileImage);
            $details['image'] = $profileImage;
        }


        course::Create($details);

        return redirect('/admin/courses/list-course');

    }

    public function edit($course_id){
        $course = course::with(['categorycourse','coursetype'])->where('course_id' == $course_id)->first();

        return view('course.editcourse', compact('course'));
    }
    function category(){
    	return view('course.category');
    }
    function detail(){
    	return view('course.detailcourse');
    }

    public function delete($course_id)
    {
        $course = course::find($course_id);
        $course->delete();
        return redirect('/admin/course/list-course');
    }
    
}