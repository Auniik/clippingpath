@extends('layouts.admin_layout')
@section('title', 'Add Page for Navigation Submenu')
@section('admin_content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-briefcase"></i> Add Page</h1>
            <p>Add page for navigation menu</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{url('submenus')}}">Manage Submenus</a></li>
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
    <?php
    $menu_name=str_replace(' ', '-', strtolower($submenu->menu->name));
    ?>

    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title col-lg-8 offset-lg-2">Add Page</h3><hr>
                <div class="tile-body col-lg-8 offset-lg-2">
                    <form action="{{url('pages')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Submenu</label>
                            <input value="{{$submenu->name}}"  class="form-control" disabled  >
                            <input type="hidden" name="submenu_id" value="{{$submenu->id}}"  class="form-control" >
                        </div>
                        <div class="form-group">
                            <label class="control-label">Slug</label>
                            <input value="<?php echo url('/').'/'.$menu_name  ?>/{{$submenu->slug}}"  class="form-control" disabled  >

                        </div>
                        <div class="form-group">
                            <hr>
                            <p class="text-warning"><i>If you want to compare two images on mouse hover then add before and after images.</i></p>
                        </div>
                        <div class="form-group">
                                <label class="control-label">Before Image</label>
                                <input class="form-control @if($errors->has('before_thumbnail')) is-invalid @endif" name="before_thumbnail" type="file" >
                                <p class="text-primary">Note: Size of Image must be 1360px *  500px.</p>
                            @if($errors->has('before_thumbnail'))
                                <div class="invalid-feedback">
                                    {{$errors->first('before_thumbnail')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="control-label">After Image <span class="text-warning">(Optional)</span></label>
                            <input class="form-control @if($errors->has('after_thumbnail')) is-invalid @endif" name="after_thumbnail" type="file" >
                            <p class="text-primary">Note: Size of Image must be 1360px *  500px.</p>
                            @if($errors->has('after_thumbnail'))
                                <div class="invalid-feedback">
                                    {{$errors->first('after_thumbnail')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Page Title</label>
                            <input name="title" class="form-control @if($errors->has('title')) is-invalid @endif" value="{{old('title')}}" type="text" placeholder="Enter Page title" >
                            @if($errors->has('title'))
                                <div class="invalid-feedback">
                                    {{$errors->first('title')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Service Icon</label>
                            <input class="form-control @if($errors->has('icon')) is-invalid @endif" name="icon" type="file" >
                            <p class="text-primary">Note: Size of Image must be under 100px *  100px. Try to use a specific .PNG icon here which can describe content of this page.</p>
                            @if($errors->has('icon'))
                                <div class="invalid-feedback">
                                    {{$errors->first('icon')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Description</label>
                            <textarea name="description" id="" class="summernote form-control @if($errors->has('description')) is-invalid @endif" placeholder="Enter item's description">{{old('description')}}</textarea>
                            @if($errors->has('description'))
                                <div class="invalid-feedback">
                                    {{$errors->first('description')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Feature Title</label>
                            <input name="feature_title" class="form-control @if($errors->has('feature_title')) is-invalid @endif" value="{{old('feature_title')}}" type="text" placeholder="Enter feature title" >
                            @if($errors->has('feature_title'))
                                <div class="invalid-feedback">
                                    {{$errors->first('feature_title')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Feature Text</label>
                            <textarea name="feature_text" rows="4" class="form-control @if($errors->has('feature_text')) is-invalid @endif" placeholder="Enter item's description">{{old('feature_text')}}</textarea>
                            @if($errors->has('feature_text'))
                                <div class="invalid-feedback">
                                    {{$errors->first('feature_text')}}
                                </div>
                            @endif
                        </div>

                        <div class="tile-footer">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add Page</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
