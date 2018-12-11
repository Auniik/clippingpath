@extends('layouts.admin_layout')
@section('title', 'Add Contact page Information')
@section('admin_content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-info"></i> Add Contact</h1>
            <p>Add some contact details for your website</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{url('contacts/save')}}">Add Contact</a></li>
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
                            <input name="headline" class="form-control @if($errors->has('headline')) is-invalid @endif" value="{{old('location_one')}}" type="text" placeholder="Enter feature headline" >
                            @if($errors->has('location_one'))
                                <div class="invalid-feedback">
                                    {{$errors->first('location_one')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Address 1</label>
                            <textarea name="address_one" rows="3" class="form-control @if($errors->has('address_one')) is-invalid @endif" placeholder="Enter feature description">{{old('address_one')}}</textarea>
                            @if($errors->has('address_one'))
                                <div class="invalid-feedback">
                                    {{$errors->first('address_one')}}
                                </div>
                            @endif
                        </div>
                        {{--Address Two--}}
                        <div class="form-group">
                            <label class="control-label">Location 1</label>
                            <input name="headline" class="form-control @if($errors->has('headline')) is-invalid @endif" value="{{old('location_one')}}" type="text" placeholder="Enter feature headline" >
                            @if($errors->has('location_one'))
                                <div class="invalid-feedback">
                                    {{$errors->first('location_one')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Address 1</label>
                            <textarea name="address_one" rows="3" class="form-control @if($errors->has('address_one')) is-invalid @endif" placeholder="Enter feature description">{{old('address_one')}}</textarea>
                            @if($errors->has('address_one'))
                                <div class="invalid-feedback">
                                    {{$errors->first('address_one')}}
                                </div>
                            @endif
                        </div>
                        {{--Address Three--}}
                        <div class="form-group">
                            <label class="control-label">Location 1</label>
                            <input name="headline" class="form-control @if($errors->has('headline')) is-invalid @endif" value="{{old('location_one')}}" type="text" placeholder="Enter feature headline" >
                            @if($errors->has('location_one'))
                                <div class="invalid-feedback">
                                    {{$errors->first('location_one')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Address 1</label>
                            <textarea name="address_one" rows="3" class="form-control @if($errors->has('address_one')) is-invalid @endif" placeholder="Enter feature description">{{old('address_one')}}</textarea>
                            @if($errors->has('address_one'))
                                <div class="invalid-feedback">
                                    {{$errors->first('address_one')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Google Maps</label>
                            <textarea name="google_maps" rows="3" class="form-control @if($errors->has('google_maps')) is-invalid @endif" placeholder="Enter feature description">{{old('address_google_mapsogoogle_mapsne')}}</textarea>
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
