@extends('layouts.admin_layout')
@section('title', 'Edit blog')
@section('admin_content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-info"></i> Edit Blog</h1>
            <p>Edit some blogs for your website</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{url('blogs/create')}}">Edit Blog</a></li>
        </ul>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title col-lg-8 offset-lg-2">Edit Blog</h3><hr>
                <div class="tile-body col-lg-8 offset-lg-2">
                    <form action="{{route('blogs.update', $blog->id)}}" method="post" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Blog Image</label>
                            <input class="form-control @if($errors->has('thumbnail')) is-invalid @endif" name="thumbnail" type="file" >
                            <p class="text-primary">Note: Minimum Image width must be within 640px</p>
                            <img src="{{url($blog->thumbnail)}}" class="img-fluid" width="640"alt="">
                            @if($errors->has('thumbnail'))
                                <div class="invalid-feedback">
                                    {{$errors->first('thumbnail')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Blog Heading</label>
                            <input name="headline" class="form-control @if($errors->has('headline')) is-invalid @endif" value="{{$blog->headline}}" type="text" placeholder="Enter blog headline" >
                            @if($errors->has('headline'))
                                <div class="invalid-feedback">
                                    {{$errors->first('headline')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Description</label>
                            <textarea name="description" id="" class="summernote form-control @if($errors->has('description')) is-invalid @endif" placeholder="Enter blog description">{{$blog->description}}</textarea>
                            @if($errors->has('description'))
                                <div class="invalid-feedback">
                                    {{$errors->first('description')}}
                                </div>
                            @endif
                        </div>
                    

                        <div class="animated-radio-button">
                            <label>Publication Status</label>
                            <div >
                                <label class="form-check-label">
                                    <input type="radio" name="status" class="form-check-input" value="1" {{$blog->status==1 ? 'checked' : ''}}><span class="label-text">Active</span>
                                </label>
                            </div>
                            <div>
                                <label class="form-check-label">
                                    <input type="radio" name="status" class="form-check-input" value="0"  {{$blog->status==0 ? 'checked' : ''}}><span class="label-text">Inactive</span>
                                </label>
                            </div>
                        </div>
                        <div class="tile-footer">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Blog</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
