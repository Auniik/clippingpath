@extends('layouts.admin_layout')
@section('title', 'Edit items of portfolio')
@section('admin_content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-briefcase"></i>Edit items from portfolio</h1>
            <p>Edit works you have done for portfolio page</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{url('portfolio-items')}}">Portfolio Items</a></li>
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
                <h3 class="tile-title col-lg-8 offset-lg-2">Add Items</h3><hr>
                <div class="tile-body col-lg-8 offset-lg-2">
                    <form action="{{url('features')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Content Title</label>
                            <input name="title" class="form-control @if($errors->has('title')) is-invalid @endif" value="{{$portfolio_item->title}}" type="text" placeholder="Enter feature headline" >
                            @if($errors->has('title'))
                                <div class="invalid-feedback">
                                    {{$errors->first('title')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Description</label>
                            <textarea name="description" id="" class="summernote form-control @if($errors->has('description')) is-invalid @endif" placeholder="Enter feature description">{{$portfolio_item->description}}</textarea>
                            @if($errors->has('description'))
                                <div class="invalid-feedback">
                                    {{$errors->first('description')}}
                                </div>
                            @endif
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
                            <label class="control-label">After Image</label>
                            <input class="form-control @if($errors->has('after_thumbnail')) is-invalid @endif" name="after_thumbnail" type="file" >
                            <p class="text-primary">Note: Size of Image must be 1360px *  500px.</p>
                            @if($errors->has('after_thumbnail'))
                                <div class="invalid-feedback">
                                    {{$errors->first('after_thumbnail')}}
                                </div>
                            @endif
                        </div>

                        <div class="animated-radio-button">
                            <label>Publication Status</label>
                            <div >
                                <label class="form-check-label">
                                    <input type="radio" name="status" class="form-check-input" value="1" {{$portfolio_item->status==1 ? 'checked' : ''}}><span class="label-text">Active</span>
                                </label>
                            </div>
                            <div>
                                <label class="form-check-label">
                                    <input type="radio" name="status" class="form-check-input" value="0"  {{$portfolio_item->status==0 ? 'checked' : ''}}><span class="label-text">Inactive</span>
                                </label>
                            </div>
                        </div>
                        <div class="tile-footer">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Item</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
