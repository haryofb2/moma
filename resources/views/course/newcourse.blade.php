@extends('layout.master')
@section('title', 'New Course')
@section('parentPageTitle', 'Course')


@section('content')


<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="body">
                <form method="post" action="{{route('course.store')}}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label>Poster Course<br><small>try to upload file larger than 100 KB</small></label>


                        <div class="body">
                            <input type="file" class="dropify" data-max-file-size="100K" name="image">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Course Name</label>
                        <input type="text" name="course_name" class="form-control" placeholder="Enter Course Name" />
                    </div>
                    <div class="form-group">
                        <label>Category Course</label>
                        <select class="form-control show-tick" name="category_course_id">
                            <option>Select Category</option>
                            @foreach ($categorycourse as $cc)
                            <option value="{{$cc->category_course_id}}">{{$cc->category_course_id}}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- <div class="form-group">
                        <label>Category Course</label>
                        <select class="form-control show-tick" name="category_course_id">
                            <option>Select Category</option>
                            <option>Family</option>
                            <option>Business</option>
                        </select>
                    </div> --}}
                    {{-- <div class="form-group">
                        <label>Course Type</label>
                        <select class="form-control show-tick" name="course_type_id">
                            <option>Course Type</option>
                            @foreach ($coursetype as $ct)
                            <option value="{{$ct->course_type_id}}">{{$ct->course_type_name}}</option>
                            @endforeach
                        </select>
                    </div> --}}
                    <div class="form-group row">
                        <div class="col-6">
                            <label>Course Type</label>
                            <select class="form-control show-tick" name="course_type_id">
                                <option>Select Course Type</option>
                                @foreach ($coursetype as $ct)
                                <option value="{{$ct->course_type_id}}">{{$ct->course_type_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-6">
                            <label>Price (Rp.)</label>
                            <input type="text" name="price" class="form-control" placeholder="Enter Price Venue" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Course Venue</label>
                        <input type="text" name="venue" class="form-control" placeholder="Enter Course Venue" />
                    </div>
                    <div class="form-group row">
                        <div class="col-6">
                            <label>Start Date</label>
                            <input type="datetime-local" name="start_date" class="form-control"
                                placeholder="Enter Course Venue" />

                        </div>
                        <div class="col-lg-6">
                            <label>End Date </label>
                            <input type="datetime-local" name="end_date" class="form-control"
                                placeholder="Enter Course Venue" />
                        </div>
                    </div>

                    <!-- <div class="form-group m-t-20 m-b-20">
                    <label>Poster Course</label>
                    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                    <<small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for 
                the above input. It's a bit lighter and easily wraps to a new line.</small> 
            </div> -->
                    <label>Description Course</label>
                    {{-- <div class="summernote">
                        <!-- <h3 class="m-b-0">hi,</h3>
                    <h4 class="m-t-0">we are Summernote</h4> -->
                        <p></p>
                    </div> --}}
                    <textarea name="description" class="summernote"></textarea>
                    <button type="button" class="btn btn-block btn-primary   m-t-20">Post</button>
                </form>
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