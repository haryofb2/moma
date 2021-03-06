@extends('layout.master')
@section('title', 'New Event')
@section('parentPageTitle', 'Event')


@section('content')


<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="body">
                <form method="post" action="{{route('event.store')}}">
                    {{ csrf_field() }}
                    {{-- <input type="hidden" name="event_id" id="event_id"> --}}
                    <div class="form-group">
                        <label>Poster Event<br><small>try to upload file larger than 100 KB</small></label>


                        <div class="body">
                            <input type="file" class="dropify" data-max-file-size="100K" name="image">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Event Name</label>
                        <input type="text" class="form-control" placeholder="Enter Event Name" name="event_name" />
                    </div>
                    <div class="form-group">
                        <label>Category Event</label>
                        <select class="form-control show-tick" name="category_event_id">
                            <option>Select Category</option>
                            @foreach ($category_event as $ce)
                            <option value="{{$ce->category_event_id}}">{{$ce->category_event_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        <div class="col-6">
                            <label>Event Type</label>
                            <select class="form-control show-tick" name="event_type_id">
                                <option>Select Event Type</option>
                                @foreach ($event_type as $et)
                                <option value="{{$et->event_type_id}}">{{$et->event_type_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-6">
                            <label>Price (Rp.)</label>
                            <input type="text" class="form-control" placeholder="Enter Price Venue" name="price" />

                        </div>
                    </div>
                    <div class="form-group">
                        <label>Event Venue</label>
                        <input type="text" class="form-control" placeholder="Enter Event Venue" name="venue" />
                    </div>
                    <div class="form-group">
                        <label>Narasumber</label>
                        <select class="form-control show-tick" name="speaker">
                            <option>Select Narasumber</option>
                            @foreach ($speaker as $s)
                            <option value="{{$s->speaker_id}}">{{$s->speaker_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Reward Event</label>
                        <select class="form-control show-tick" name="reward_event_id">
                            <option>Select Reward Event</option>
                            @foreach ($reward_event as $re)
                            <option value="{{$re->reward_event_id}}">{{$re->reward_event_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        <div class="col-6">
                            <label>Start Date</label>
                            <input type="datetime-local" class="form-control" placeholder="Enter Event Venue"
                                name="start_date" />

                        </div>
                        <div class="col-lg-6">
                            <label>End Date </label>
                            <input type="datetime-local" class="form-control" placeholder="Enter Event Venue"
                                name="end_date" />
                        </div>
                    </div>

                    <!-- <div class="form-group m-t-20 m-b-20">
                    <label>Poster Event</label>
                    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                    <<small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for 
                    the above input. It's a bit lighter and easily wraps to a new line.</small> 
                    </div> -->
                    <label>Description Event</label>
                    <textarea name="content" class="summernote"></textarea>
                    <button type="submit" class="btn btn-block btn-primary   m-t-20">CREATE</button>
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