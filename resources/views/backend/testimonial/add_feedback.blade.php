@extends('layouts.admin_layout')
@section('title', 'Add a feedback from client')
@section('admin_content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-comments-o"></i> Add Feedback</h1>
            <p>Add a feedback from clients</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{url('feedbacks')}}">Feedbacks</a></li>
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
                <h3 class="tile-title col-lg-8 offset-lg-2">Add Feedback</h3><hr>
                <div class="tile-body col-lg-8 offset-lg-2">
                    <form action="{{url('feedbacks')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label class="control-label">Client Image</label>
                            <input class="form-control @if($errors->has('thumbnail')) is-invalid @endif" name="thumbnail" type="file" >
                            <p class="text-primary">Note: Ratio of Image must be 1:1, example: 200px * 200px.</p>
                            @if($errors->has('client_thumbnail'))
                                <div class="invalid-feedback">
                                    {{$errors->first('thumbnail')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input name="name" class="form-control @if($errors->has('name')) is-invalid @endif" value="{{old('name')}}" type="text" placeholder="Enter client name" >
                            @if($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{$errors->first('name')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Designation</label>
                            <input name="designation" class="form-control @if($errors->has('designation')) is-invalid @endif" value="{{old('designation')}}" type="text" placeholder="Enter designation of client" >
                            @if($errors->has('designation'))
                                <div class="invalid-feedback">
                                    {{$errors->first('designation')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Feedback Message</label>
                            <textarea name="feedback" rows="4" class="form-control @if($errors->has('feedback')) is-invalid @endif" placeholder="Enter feedback message.">{{old('feedback')}}</textarea>
                            @if($errors->has('feedback'))
                                <div class="invalid-feedback">
                                    {{$errors->first('feedback')}}
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
                            <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add Item</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
