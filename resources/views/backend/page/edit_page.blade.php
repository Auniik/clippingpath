@extends('layouts.admin_layout')
@section('title', 'Edit Page for Navigation Menu')
@section('admin_content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-briefcase"></i> Edit Contents</h1>
            <p>Edit contents for navigation page</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{url('/menus')}}">Manage Services</a></li>
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
                <h3 class="tile-title col-lg-8 offset-lg-2">Edit Contents</h3><hr>
                <div class="tile-body col-lg-8 offset-lg-2">
                    <form action="{{route('page.update', $pageRecord->id)}}" method="post" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Page Name</label>
                            <input value="{{$pageRecord->submenu->name}}"  class="form-control" disabled  >
                            <input type="hidden" name="submenu_id" value="{{$pageRecord->submenu->id}}"  class="form-control" >
                        </div>
                        <?php
                            $menu_name=str_replace(' ', '-', strtolower($submenu->menu->name));
                        ?>
                        <div class="form-group">
                            <label class="control-label">Slug</label>
                            <input value="<?php echo url('/').'/'.$menu_name ?>/{{$pageRecord->submenu->slug}}"  class="form-control" disabled  >

                        </div>
                        <div class="form-group">
                            <hr>

                        </div>
                        <div class="form-group">
                            <label class="control-label">Default Image</label>
                            <input class="form-control @if($errors->has('before_thumbnail')) is-invalid @endif" name="before_thumbnail" type="file" >
                            <p class="text-primary">Note: Size of Image must be 1360px *  500px.</p>
                            <img class="img-fluid img-thumbnail" src="{{url(($pageRecord->before_thumbnail)==null ? '' : $pageRecord->before_thumbnail)}}" alt="">
                            @if($errors->has('before_thumbnail'))
                                <div class="invalid-feedback">
                                    {{$errors->first('before_thumbnail')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="control-label">Moving Image <span class="text-warning">(Optional)</span></label>
                            <small class="text-success">Its a  moving image over the default image.</small>
                            <input class="form-control @if($errors->has('after_thumbnail')) is-invalid @endif" name="after_thumbnail" type="file" >
                            <p class="text-primary">Note: Size of Image must be 1360px *  500px.</p>
                            <img class="img-fluid img-thumbnail" src="{{url(($pageRecord->after_thumbnail)==null ? '' : $pageRecord->after_thumbnail)}}" alt="">
                            @if($errors->has('after_thumbnail'))
                                <div class="invalid-feedback">
                                    {{$errors->first('after_thumbnail')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Page Title</label>
                            <input name="title" class="form-control @if($errors->has('title')) is-invalid @endif" value="{{$pageRecord->title}}" type="text" placeholder="Enter Page title" >
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
                            <img class="img-fluid img-thumbnail" src="{{url(($pageRecord->icon)==null ? '' : $pageRecord->icon)}}" alt="">

                            @if($errors->has('icon'))
                                <div class="invalid-feedback">
                                    {{$errors->first('icon')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Description</label>
                            <textarea name="description"  class="summernote form-control @if($errors->has('description')) is-invalid @endif" placeholder="Enter item's description">{{$pageRecord->description}}</textarea>
                            @if($errors->has('description'))
                                <div class="invalid-feedback">
                                    {{$errors->first('description')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Feature Title</label>
                            <input name="feature_title" class="form-control @if($errors->has('feature_title')) is-invalid @endif" value="{{$pageRecord->feature_title}}" type="text" placeholder="Enter feature title" >
                            @if($errors->has('feature_title'))
                                <div class="invalid-feedback">
                                    {{$errors->first('feature_title')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Feature Text</label>
                            <textarea name="feature_text" rows="4" class="form-control @if($errors->has('feature_text')) is-invalid @endif" placeholder="Enter item's description">{{$pageRecord->feature_text}}</textarea>
                            @if($errors->has('feature_text'))
                                <div class="invalid-feedback">
                                    {{$errors->first('feature_text')}}
                                </div>
                            @endif
                        </div>
                        <div class="tile-footer">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Page</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
