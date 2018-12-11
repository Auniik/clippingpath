@extends('layouts.admin_layout')
@section('title', 'Edit Contact page Information')
@section('admin_content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-info"></i> Edit Contact</h1>
            <p>Edit some contact details for your website</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{url('contacts/update')}}">Edit Contact</a></li>
        </ul>
    </div>

    <?php
    $message=Session::get('message');
    if ($message) {
        echo '<div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$message.'
                  </div>';
        Session::put('message',null);
    }
    ?>

    <div class="row">
        <div class="col-md-7">
            <div class="tile">
                <h3 class="tile-title">Add Contact Info</h3>
                <div class="tile-body">
                    <form action="{{url('features')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{--Address One--}}
                        <div class="form-group">
                            <label class="control-label">Location 1</label>
                            <input name="location_one" class="form-control @if($errors->has('location_one')) is-invalid @endif" value="{{old('location_one')}}" type="text" placeholder="Enter Country/Branch name" >
                            @if($errors->has('location_one'))
                                <div class="invalid-feedback">
                                    {{$errors->first('location_one')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Address 1</label>
                            <textarea name="address_one" rows="3" class="form-control @if($errors->has('address_one')) is-invalid @endif" placeholder="Enter address details">{{old('address_one')}}</textarea>
                            @if($errors->has('address_one'))
                                <div class="invalid-feedback">
                                    {{$errors->first('address_one')}}
                                </div>
                            @endif
                        </div>

                        <hr>
                        {{--Address Two--}}
                        <div class="form-group">
                            <label class="control-label">Location 2</label>
                            <input name="location_two" class="form-control @if($errors->has('location_two')) is-invalid @endif" value="{{old('location_two')}}" type="text" placeholder="Enter Country/Branch name" >
                            @if($errors->has('location_two'))
                                <div class="invalid-feedback">
                                    {{$errors->first('location_two')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Address 2</label>
                            <textarea name="address_two" rows="3" class="form-control @if($errors->has('address_two')) is-invalid @endif" placeholder="Enter address details">{{old('address_two')}}</textarea>
                            @if($errors->has('address_two'))
                                <div class="invalid-feedback">
                                    {{$errors->first('address_two')}}
                                </div>
                            @endif
                        </div>

                        <hr>
                        <div class="form-group">
                            <label class="control-label">Location 3</label>
                            <input name="location_three" class="form-control @if($errors->has('location_three')) is-invalid @endif" value="{{old('location_three')}}" type="text" placeholder="Enter Country/Branch name" >
                            @if($errors->has('location_three'))
                                <div class="invalid-feedback">
                                    {{$errors->first('location_three')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Address 3</label>
                            <textarea name="address_three" rows="3" class="form-control @if($errors->has('address_three')) is-invalid @endif" placeholder="Enter address details">{{old('address_three')}}</textarea>
                            @if($errors->has('address_three'))
                                <div class="invalid-feedback">
                                    {{$errors->first('address_three')}}
                                </div>
                            @endif
                        </div>

                        <hr>
                        <div class="form-group">
                            <label class="control-label">Google Maps</label>
                            <textarea name="google_maps" rows="3" class="form-control @if($errors->has('google_maps')) is-invalid @endif" placeholder="Enter feature description">{{old('google_maps')}}</textarea>
                            @if($errors->has('google_maps'))
                                <div class="invalid-feedback">
                                    {{$errors->first('google_maps')}}
                                </div>
                            @endif
                        </div>

                        <div class="animated-radio-button">
                            <label>Publication Status</label>
                            <div >
                                <label class="form-check-label">
                                    <input type="radio" name="status" class="form-check-input" value="1" checked="checked"><span class="label-text">Active</span>
                                </label>
                            </div>

                            <div>
                                <label class="form-check-label">
                                    <input type="radio" name="status" class="form-check-input" value="0"><span class="label-text">Inactive</span>
                                </label>
                            </div>
                            @if($errors->has('status'))
                                <div class="invalid-feedback">
                                    {{$errors->first('status')}}
                                </div>
                            @endif
                        </div>
                        <div class="tile-footer">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add Contact</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
