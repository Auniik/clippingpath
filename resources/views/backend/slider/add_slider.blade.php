@extends('layouts.admin_layout')
@section('title', 'Add Slider Item')
@section('admin_content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-briefcase"></i> Add Slider Item</h1>
            <p>Add images for slider carousel</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{url('sliders')}}">Slider Items</a></li>
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
                <form class="row" action="{{url('sliders')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-lg-6">
                        <h3>Wide Image</h3><hr>
                        <div class="form-group">
                            <label class="control-label">Wide Image</label>
                            <input class="form-control @if($errors->has('thumbnail_wide')) is-invalid @endif" name="thumbnail_wide" type="file" >
                            <p class="text-primary">Note: Size of Image must be 500px *  340px.</p>
                            @if($errors->has('thumbnail_wide'))
                                <div class="invalid-feedback">
                                    {{$errors->first('thumbnail_wide')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Wide Image Title</label>
                            <textarea name="thumbnail_wide_title" rows="2" class="form-control @if($errors->has('thumbnail_wide_title')) is-invalid @endif" placeholder="Enter feature title of this image">{{old('thumbnail_wide_title')}}</textarea>
                            @if($errors->has('thumbnail_wide_title'))
                                <div class="invalid-feedback">
                                    {{$errors->first('thumbnail_wide_title')}}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h3>Square Image</h3><hr>
                        <div class="form-group">
                            <label class="control-label">Square Image</label>
                            <input class="form-control @if($errors->has('thumbnail_square')) is-invalid @endif" name="thumbnail_square" type="file" >
                            <p class="text-primary">Note: Size of Image must be 350px *  390px.</p>
                            @if($errors->has('thumbnail_square'))
                                <div class="invalid-feedback">
                                    {{$errors->first('thumbnail_square')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Square Image Title</label>
                            <textarea name="thumbnail_square_title" rows="2" class="form-control" placeholder="Enter feature title of this image">{{old('thumbnail_square_title')}}</textarea>
                        </div>
                    </div>


                    <div class="col-lg-6 offset-lg-3">
                        <hr>
                        <h3>Background Image</h3><hr>
                        <div class="form-group">
                            <label class="control-label">Background Image</label>
                            <input class="form-control @if($errors->has('background_thumbnail')) is-invalid @endif" name="background_thumbnail" type="file" >
                            <p class="text-primary">Note: Aspect ratio of Image must be 11:4.</p>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Background Color</label>
                            <input class="form-control @if($errors->has('background_color')) is-invalid @endif" name="background_color" type="color" style="height: 50px;" value="#539662">
                            <p class="text-primary">Note: Background color will show when there is no existance of  background image.</p>
                            @if($errors->has('background_color'))
                                <div class="invalid-feedback">
                                    {{$errors->first('background_color')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Background Text</label>
                            <textarea name="background_text" rows="4" class="form-control @if($errors->has('background_text')) is-invalid @endif" placeholder="Enter item's description">{{old('background_text')}}</textarea>
                            @if($errors->has('background_text'))
                                <div class="invalid-feedback">
                                    {{$errors->first('background_text')}}
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
                        </div>
                        <br>
                        <div class="form-group">
                            <input class="btn btn-primary col-md-12" value="Publish" type="submit">
                        </div>
                    </div>
                    <hr>

                </form>
            </div>
        </div>
    </div>
@endsection
