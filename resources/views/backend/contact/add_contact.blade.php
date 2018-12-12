@extends('layouts.admin_layout')
@section('title', 'Add Contact page Information')
@section('admin_content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-gear"></i> Contact Page Configurations</h1>
            <p>Add some contact details for your website</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{url('messages')}}"> Messages</a></li>
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
        <div class="col-md-12">
            <div class="tile">
                <form class="row" action="{{url('contact/save')}}" method="post">
                    @csrf
                    <div class="col-lg-4">
                        <h3>Office Location 1</h3><hr>
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
                            <textarea name="address_one" rows="4" class="form-control @if($errors->has('address_one')) is-invalid @endif" placeholder="Enter address details">{{old('address_one')}}</textarea>
                            @if($errors->has('address_one'))
                                 <div class="invalid-feedback">
                            {{$errors->first('address_one')}}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <h3>Office Location 2</h3><hr>
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
                            <textarea name="address_two" rows="4" class="form-control @if($errors->has('address_two')) is-invalid @endif" placeholder="Enter address details">{{old('address_two')}}</textarea>
                            @if($errors->has('address_two'))
                                <div class="invalid-feedback">
                                    {{$errors->first('address_two')}}
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <h3>Office Location 3</h3><hr>
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
                            <textarea name="address_three" rows="4" class="form-control @if($errors->has('address_three')) is-invalid @endif" placeholder="Enter address details">{{old('address_three')}}</textarea>
                            @if($errors->has('address_three'))
                                <div class="invalid-feedback">
                                    {{$errors->first('address_three')}}
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <hr>
                        <label class="control-label">Google Maps Embaded Link</label>
                        <textarea name="google_maps" rows="4" class="form-control @if($errors->has('google_maps')) is-invalid @endif" placeholder="Enter address details">{{old('google_maps')}}</textarea>
                        @if($errors->has('google_maps'))
                            <div class="invalid-feedback">
                                {{$errors->first('google_maps')}}
                            </div>
                        @endif
<br>
                        <div class="form-group">
                            <input class="btn btn-primary" value="Publish" type="submit">
                        </div>
                    </div>
                    <hr>

                </form>
            </div>
        </div>
    </div>
@endsection
