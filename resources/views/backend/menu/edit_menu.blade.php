@extends('layouts.admin_layout')
@section('title', 'Manage Navigation Menus')
@section('admin_content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-newspaper-o"></i> Edit Menu</h1>
            <p>Manage Navigation Menu for website</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{url('/menus')}}">Menus</a></li>
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
                <h3 class="tile-title col-lg-8 offset-lg-2">Add Menu</h3><hr>
                <div class="tile-body col-lg-8 offset-lg-2">
                    <form action="{{route('menus.update', $menu)}}" method="post">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Menu Name</label>
                            <input name="menu" value="{{$menu->menu}}" class="form-control @if($errors->has('menu')) is-invalid @endif" type="text" placeholder="example: Raster To Vector">
                            @if($errors->has('menu'))
                                <div class="invalid-feedback">
                                    {{$errors->first('menu')}}
                                </div>
                            @endif
                        </div>
                        <div class="animated-radio-button">
                            <label>Publication Status</label>
                            <div >
                                <label class="form-check-label">
                                    <input type="radio" name="status" class="form-check-input" value="1" {{$menu->status==1 ? 'checked' : ''}}><span class="label-text">Active</span>
                                </label>
                            </div>

                            <div>
                                <label class="form-check-label">
                                    <input type="radio" name="status" class="form-check-input" value="0" {{$menu->status==0 ? 'checked' : ''}}><span class="label-text">Inactive</span>
                                </label>
                            </div>
                        </div>
                        <div class="tile-footer">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Menu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection