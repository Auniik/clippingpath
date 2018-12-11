@extends('layouts.admin_layout')
@section('title', 'Site Configuration')
@section('admin_content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-gear"></i> Site Configuration</h1>
            <p>Add basic informations of this website</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{url('settings')}}">Site Configuration</a></li>
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
                {{--<div class="row">--}}

                <form class="row" action="{{url('settings/save')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-lg-5">
                    <h3>Website Information</h3>
                    <div class="form-group">
                        <label for="websiteName">Website Name</label>
                        <input class="form-control @if($errors->has('website_name')) is-invalid @endif" value="{{old('website_name')}}"  name="website_name" id="websiteName" type="text" placeholder="Enter website name">
                        @if($errors->has('website_name'))
                            <div class="invalid-feedback">
                                {{$errors->first('website_name')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="websiteEmail">Website Email</label>
                        <input class="form-control @if($errors->has('website_email')) is-invalid @endif" value="{{old('website_email')}}" name="website_email" id="websiteEmail" type="text" placeholder="Enter website email">
                        @if($errors->has('website_email'))
                            <div class="invalid-feedback">
                                {{$errors->first('website_email')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea">Branding Message</label>
                        <textarea class="form-control @if($errors->has('message')) is-invalid @endif" name="message" id="exampleTextarea" rows="2" placeholder="Enter a message that brand your website">{{old('message')}}</textarea>
                        @if($errors->has('message'))
                            <div class="invalid-feedback">
                                {{$errors->first('message')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="control-label">Website Logo</label>
                        <input class="form-control @if($errors->has('logo')) is-invalid @endif" name="logo" type="file" >
                        @if($errors->has('logo'))
                            <div class="invalid-feedback">
                                {{$errors->first('logo')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="control-label">Favicon</label>
                        <input class="form-control @if($errors->has('favicon')) is-invalid @endif" name="favicon"  type="file">
                        @if($errors->has('favicon'))
                            <div class="invalid-feedback">
                                {{$errors->first('favicon')}}
                            </div>
                        @endif
                    </div>



            </div>

                     <div class="col-lg-5 offset-lg-1">
                <h3>Company Information</h3>
                <div class="form-group">
                    <label for="companyName">Company Name</label>
                    <input class="form-control @if($errors->has('company_name')) is-invalid @endif" value="{{old('company_name')}}" name="company_name" id="companyName" type="text" placeholder="Enter company name">
                    @if($errors->has('company_name'))
                        <div class="invalid-feedback">
                            {{$errors->first('company_name')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="licence">Licence No.</label>
                    <input class="form-control @if($errors->has('licence_number')) is-invalid @endif" value="{{old('licence_number')}}" name="licence_number" id="licence" type="text" placeholder="Enter Licence No.">
                    @if($errors->has('licence_number'))
                        <div class="invalid-feedback">
                            {{$errors->first('licence_number')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input class="form-control @if($errors->has('address')) is-invalid @endif" value="{{old('address')}}" name="address" id="address" type="text" placeholder="Enter Address">
                    @if($errors->has('address'))
                        <div class="invalid-feedback">
                            {{$errors->first('address')}}
                        </div>
                    @endif
                </div>
                <hr>
                <h3>Owners Information</h3>
                <div class="form-group">
                    <label for="owner_name">Owners Name</label>
                    <input class="form-control @if($errors->has('owner_name')) is-invalid @endif" value="{{old('owner_name')}}" name="owner_name" id="owner_name" type="text" placeholder="Enter owner name">
                    @if($errors->has('owner_name'))
                        <div class="invalid-feedback">
                            {{$errors->first('owner_name')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="owner_phone">Phone Number</label>
                    <input class="form-control @if($errors->has('owner_phone')) is-invalid @endif" name="owner_phone"  value="{{old('owner_phone')}}" id="owner_phone" type="text" placeholder="Enter phone number">
                    @if($errors->has('owner_phone'))
                        <div class="invalid-feedback">
                            {{$errors->first('owner_phone')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="owner_email">Email</label>
                    <input class="form-control @if($errors->has('owner_email')) is-invalid @endif" name="owner_email"  value="{{old('owner_email')}}" id="owner_email" type="text" placeholder="Enter owner email">
                    @if($errors->has('owner_email'))
                        <div class="invalid-feedback">
                            {{$errors->first('owner_email')}}
                        </div>
                    @endif
                </div>


                <hr>
                <div class="form-group pull-right">
                    <input class="btn btn-primary" value="Publish" type="submit">
                </div>
                </div>



                </form>
                    {{--</div>--}}
            </div>

            </div>
    </div>

@endsection