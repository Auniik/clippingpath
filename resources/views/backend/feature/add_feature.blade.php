@extends('layouts.admin_layout')
@section('title', 'Add feature')
@section('admin_content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-info"></i> Add Features</h1>
            <p>Add some features for your website</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{url('features')}}">Features</a></li>
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
                <h3 class="tile-title col-lg-8 offset-lg-2">Add Features</h3><hr>
                <div class="tile-body col-lg-8 offset-lg-2">
                    <form action="{{url('features')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Feature Heading</label>
                            <input name="headline" class="form-control @if($errors->has('headline')) is-invalid @endif" value="{{old('headline')}}" type="text" placeholder="Enter feature headline" >
                            @if($errors->has('headline'))
                                <div class="invalid-feedback">
                                    {{$errors->first('headline')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Description</label>
                            <textarea name="description" id="" class="summernote form-control @if($errors->has('description')) is-invalid @endif" placeholder="Enter feature description">{{old('description')}}</textarea>
                            <p class="text-primary">Note: Try to write feature description under 160 characters.</p>
                            @if($errors->has('description'))
                                <div class="invalid-feedback">
                                    {{$errors->first('description')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Feature Image</label>
                            <input class="form-control @if($errors->has('thumbnail')) is-invalid @endif" name="thumbnail" type="file" >
                            <p class="text-primary">Note: For better image view upload images width of 640px.</p>
                            @if($errors->has('thumbnail'))
                                <div class="invalid-feedback">
                                    {{$errors->first('thumbnail')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="control-label">Icon</label>
                            <input class="form-control @if($errors->has('icon')) is-invalid @endif" name="icon" type="file" >
                            <p class="text-primary">Note: Aspect Ratio of Icon must be 1:1. For better view upload .png files.</p>
                            @if($errors->has('icon'))
                                <div class="invalid-feedback">
                                    {{$errors->first('icon')}}
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
                            <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add Feature</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
