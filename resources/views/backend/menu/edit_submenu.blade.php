@extends('layouts.admin_layout')
@section('title', 'Edit Navigation Submenus')
@section('admin_content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-newspaper-o"></i> Edit Page</h1>
            <p>Edit Navigation pages for website</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{url('/menus')}}">Manage Service</a></li>
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
                <h3 class="tile-title col-lg-8 offset-lg-2">Edit Page</h3><hr>
                <div class="tile-body col-lg-8 offset-lg-2">
                    <form action="{{route('submenus.update', $submenu)}}" method="post">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Service Name</label>
                            <input value="{{optional($submenu->menu)->name  }}" class="form-control" disabled  >
                            <input type="hidden" name="menu_id" value="{{$submenu->menu_id}}"  class="form-control" >
                        </div>
                        <div class="form-group">
                            <label class="control-label">Page Name</label>
                            <input name="name"  value="{{$submenu->name}}" class="form-control @if($errors->has('name')) is-invalid @endif" type="text" placeholder="example: Raster To Vector">
                            @if($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{$errors->first('name')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Slug</label>
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputAmount">Enter  a unique slug</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><?php echo url('/') ?>/</span></div>
                                    <input name="slug" value="{{$submenu->slug}}"  class="form-control @if($errors->has('slug')) is-invalid @endif" id="exampleInputAmount" type="text" value="#" >
                                    @if($errors->has('slug'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('slug')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Serial</label>
                            <input name="serial" value="{{$submenu->serial}}" min="0" class="form-control @if($errors->has('serial')) is-invalid @endif" type="number">
                            @if($errors->has('serial'))
                                <div class="invalid-feedback">
                                    {{$errors->first('serial')}}
                                </div>
                            @endif
                        </div>
                        @if(!is_null($page))
                            <div class="animated-radio-button">
                                <label>Publication Status</label>
                                <div >
                                    <label class="form-check-label">
                                        <input type="radio" name="status" class="form-check-input" value="1" {{$submenu->status==1 ? 'checked' : ''}}><span class="label-text">Active</span>
                                    </label>
                                </div>

                                <div>
                                    <label class="form-check-label">
                                        <input type="radio" name="status" class="form-check-input" value="0" {{$submenu->status==0 ? 'checked' : ''}}><span class="label-text">Inactive</span>
                                    </label>
                                </div>
                            </div>
                        @endif

                        <div class="tile-footer">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Page</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection