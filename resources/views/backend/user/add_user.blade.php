@extends('layouts.admin_layout')
@section('title', 'Add User')
@section('admin_content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-user"></i> Add User</h1>
            <p>Add More user to manage this website</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{url('users/create')}}">Add User</a></li>
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
        <div class="col-md-6">
            <div class="tile">
                <h3 class="tile-title">Add Users</h3>
                <div class="tile-body">
                    <form action="{{url('users')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input name="name" class="form-control @if($errors->has('name')) is-invalid @endif" value="{{old('name')}}" type="text" placeholder="Enter full name" >
                            @if($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{$errors->first('name')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Email</label>
                            <input name="email" class="form-control @if($errors->has('email')) is-invalid @endif" type="email" placeholder="Enter email address" value="{{old('email')}}">
                            @if($errors->has('email'))
                                <div class="invalid-feedback">
                                    {{$errors->first('email')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Password</label>
                            <input name="password" class="form-control @if($errors->has('password')) is-invalid @endif" type="password" placeholder="Enter password">
                            @if($errors->has('password'))
                                <div class="invalid-feedback">
                                    {{$errors->first('password')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Confirm Password</label>
                            <input name="password_confirmation" class="form-control @if($errors->has('password_confirmation')) is-invalid @endif" type="password" placeholder="Enter password again">
                            @if($errors->has('password_confirmation'))
                                <div class="invalid-feedback">
                                    {{$errors->first('password_confirmation')}}
                                </div>
                            @endif
                        </div>

                        <div class="tile-footer">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection