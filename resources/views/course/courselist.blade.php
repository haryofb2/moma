@extends('layout.master')
@section('title', 'Course List')
@section('parentPageTitle', 'Course')


@section('content')
<style>
    .switch {

        position: relative;
        display: inline-block;
        width: 60px;
        height: 24px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked+.slider {
        background: orange !important;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 16px;
        width: 16px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked+.slider {
        background-color: #2196F3;
    }

    input:focus+.slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked+.slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }
</style>
<div class="row clearfix">

    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Course List <small>Basic example without any additional modification classes</small> </h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table
                        class="table table-bordered table-hover js-basic-example dataTable table-custom m-b-0 c_list">
                        <thead>
                            <tr>
                                <th>Poster</th>
                                <th>Course Name</th>
                                <th>Course Type</th>
                                <th>Category</th>
                                <th>Venue</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <!-- <th>Pricing</th> -->
                                <th>Member Registered</th>
                                <th>Publish</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($course as $c)
                            <tr>
                                <td><a href="{{route('users.detailmember')}}"><img
                                            src="https://instagram.fcgk9-2.fna.fbcdn.net/v/t51.2885-15/e35/161029917_193700562176502_1795174812505620467_n.jpg?tp=1&_nc_ht=instagram.fcgk9-2.fna.fbcdn.net&_nc_cat=106&_nc_ohc=uEH49aph3O0AX9osrHD&edm=AP_V10EAAAAA&ccb=7-4&oh=e0068bc4d5346caf712c242c23d59ca8&oe=60A1F44D&_nc_sid=4f375e"
                                            height="100" alt="">
                                    </a>
                                </td>
                                <td><a href="{{route('courses.detailcourse')}}">{{$c->course_name}}</a>
                                </td>
                                <td>{{$c->coursetype->course_type_name}}</td>
                                <td>{{$c->categorycourse->category_course_name}}</td>
                                <td>{{$c->venue}}</td>
                                <td>{{$c->start_date}}</td>
                                <td>{{$c->end_date}}</td>
                                <!-- <td>Rp. 50.000</td> -->
                                {{-- <td>{{$c->}}</td> --}}
                                <td>member pak son</td>
                                <td style="text-align:center;"><label class="switch">
                                        <input type="checkbox" name="menu" id="menu">
                                        <span class="slider round"></span>
                                    </label></td>
                                <td class="actions">
                                    <button
                                        class="btn btn-sm btn-icon btn-pure btn-default on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                            aria-hidden="true"></i></a>
                                        <button
                                            class="btn btn-sm btn-icon btn-pure btn-default on-editing button-discard"
                                            data-toggle="tooltip" data-original-title="Discard" hidden><i
                                                class="icon-close" aria-hidden="true"></i></a>
                                            <button
                                                class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-edit"
                                                data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                                    aria-hidden="true"></i></a>
                                                <button
                                                    class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"
                                                    data-toggle="tooltip" data-original-title="Remove"><i
                                                        class="icon-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @stop