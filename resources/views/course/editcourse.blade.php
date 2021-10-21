@extends('layout.master')
@section('title', 'New course')
@section('parentPageTitle', 'course')


@section('content')


<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="body">
                <form method="post" action="{{route('course.update')}}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <input type="hidden" name="course_id" id="course_id" value="{{$course->course_id}}">
                    <div class="form-group">
                        <label>Poster course<br><small>try to upload file larger than 100 KB</small></label>


                        <div class="body">
                            <input type="file" class="dropify" data-max-file-size="100K" name="image"
                                value="{{$course->image}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>course Name</label>
                        <input type="text" class="form-control" placeholder="Enter course Name" name="course_name"
                            value="{{$course->course_name}}" />
                    </div>
                    <div class="form-group">
                        <label>Category course</label>
                        <select class="form-control show-tick" name="category_course_id">
                            <option value="">Select Category</option>
                            @foreach ($categorycourse as $cc)
                            <option value="{{$cc->category_course_id}}" @if ($cc->category_course_id ==
                                $course->category_course_id)
                                selected
                                @endif>{{$cc->category_course_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        <div class="col-6">
                            <label>course Type</label>
                            <select class="form-control show-tick" name="course_type_id"
                                value="{{$course->course_type}}">
                                <option value="">Select course Type</option>
                                @foreach ($coursetype as $ct)
                                <option value="{{$ct->course_type_id}}" @if ($ct->course_type_id ==
                                    $course->course_type_id)
                                    selected
                                    @endif>{{$ct->course_type_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-6">
                            <label>Price (Rp.)</label>
                            <input type="text" class="form-control" placeholder="Enter Price Venue" name="price"
                                value="{{$course->price}}" />

                        </div>
                    </div>
                    <div class="form-group">
                        <label>course Venue</label>
                        <input type="text" class="form-control" placeholder="Enter course Venue" name="venue"
                            value="{{$course->venue}}" />
                    </div>
                    <div class="form-group row">
                        <div class="col-6">
                            <label>Start Date</label>
                            <input type="datetime-local" class="form-control" placeholder="Enter course Venue"
                                name="start_date" value="" />

                        </div>
                        <div class="col-lg-6">
                            <label>End Date </label>
                            <input type="datetime-local" class="form-control" placeholder="Enter course Venue"
                                name="end_date" value="" />
                        </div>
                    </div>

                    <!-- <div class="form-group m-t-20 m-b-20">
                    <label>Poster course</label>
                    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                    <<small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for 
                the above input. It's a bit lighter and easily wraps to a new line.</small> 
                </div> -->
                    <label>Description course</label>
                    <textarea name="description" class="summernote">{{$course->description}}</textarea>
                    <button type="submit" class="btn btn-block btn-primary   m-t-20">CREATE</button>
            </div>
        </div>
    </div>
</div>

@stop

@section('page-script')
<script>
    jQuery(document).ready(function() {

$('.summernote').summernote({
height: 350, // set editor height
minHeight: null, // set minimum height of editor
maxHeight: null, // set maximum height of editor
focus: false, // set focus to editable area after initializing summernote
popover: { image: [], link: [], air: [] }
});

$('.inline-editor').summernote({
airMode: true
});

});

window.edit = function() {
$(".click2edit").summernote()
},

window.save = function() {
$(".click2edit").summernote('destroy');
}
</script>


@stop