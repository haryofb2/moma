@extends('layout.master')
@section('title', 'New User')
@section('parentPageTitle', 'Forms')


@section('content')

<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2>New User</h2>
            </div>
            <div class="body">
                <form id="basic-form" method="post" novalidate>
                    <div class="form-group">
                        <label>Text Input</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email Input</label>
                        <input type="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Text Area</label>
                        <textarea class="form-control" rows="5" cols="30" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Checkbox</label>
                        <br />
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox" required
                                data-parsley-errors-container="#error-checkbox">
                            <span>Option 1</span>
                        </label>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox">
                            <span>Option 2</span>
                        </label>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox">
                            <span>Option 3</span>
                        </label>
                        <p id="error-checkbox"></p>
                    </div>
                    <div class="form-group">
                        <label>Radio Button</label>
                        <br />
                        <label class="fancy-radio">
                            <input type="radio" name="gender" value="male" required
                                data-parsley-errors-container="#error-radio">
                            <span><i></i>Male</span>
                        </label>
                        <label class="fancy-radio">
                            <input type="radio" name="gender" value="female">
                            <span><i></i>Female</span>
                        </label>
                        <p id="error-radio"></p>
                    </div>
                    <div class="form-group">
                        <label for="food">Multiselect</label>
                        <br />
                        <select id="food" name="food[]" class="multiselect multiselect-custom" multiple="multiple"
                            data-parsley-required data-parsley-trigger-after-failure="change"
                            data-parsley-errors-container="#error-multiselect">
                            <option value="cheese">Cheese</option>
                            <option value="tomatoes">Tomatoes</option>
                            <option value="mozarella">Mozzarella</option>
                            <option value="mushrooms">Mushrooms</option>
                            <option value="pepperoni">Pepperoni</option>
                            <option value="onions">Onions</option>
                        </select>
                        <p id="error-multiselect"></p>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Validate</button>
                </form>
            </div>
        </div>
    </div>

</div>

@stop

@section('page-script')

$(function() {
// validation needs name of the element
$('#food').multiselect();

// initialize after multiselect
$('#basic-form').parsley();
});

@stop