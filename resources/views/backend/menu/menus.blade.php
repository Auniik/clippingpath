@extends('layouts.admin_layout')
@section('title', 'Manage Navigation Menus')
@section('admin_content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-newspaper-o"></i> Manage Navigation Menus</h1>
            <p>Manage Navigation Menu for website</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{url('/')}}">Visit Site</a></li>
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

    {{--Manage Profile Link--}}
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="table table-responsive">
                    <h3 class="tile-title">List of Navigation Menus</h3>
                    <table class="table table-striped">

                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            {{--<th>Slug</th>--}}
                            <th>Serial</th>
                            <th>Status</th>
                            <th>Submenu</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $sl=$menus->firstItem() ?>
                        @foreach($menus as $key => $menu)
                            <tr>
                                <td>{{$sl++}}</td>
                                <td>{{$menu->name}}</td>
                                {{--<td><a href="{{url('/')}}/{{$menu->slug}}">{{url('/')}}/{{$menu->slug}}</a></td>--}}
                                <td>{{$menu->serial}}</td>
                                @if($menu->status==1)
                                    <td>
                                        <span class="badge badge-success">Active</span>
                                    </td>
                                @else
                                    <td>
                                        <span class="badge badge-danger">Inactive</span>
                                    </td>
                                @endif
                                {{--{{$menu->submenus->pluck('name')->implode(', ')}}--}}
                                <td><a class="btn btn-sm  btn-default" href="{{route('submenus.create', $menu)}}">Submenu</a></td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-sm btn-primary" href="{{route('menus.edit' , $menu)}}"><i class="fa fa-edit fa-fw"></i></a>
                                        <a class="btn btn-sm delete-data btn-danger" href="{{route('menus.destroy' , $menu)}}"><i class="fa fa-trash-o fa-fw"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div>{{$menus->links()}}</div>
                </div>
            </div>
        </div>
    </div>

    {{--Add Menus--}}
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title col-lg-8 offset-lg-2">Add Menu</h3><hr>
                <div class="tile-body col-lg-8 offset-lg-2">
                    <form action="{{url('menus')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Menu Name</label>
                            <input name="name" class="form-control @if($errors->has('name')) is-invalid @endif" type="text" placeholder="example: Services">
                            @if($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{$errors->first('name')}}
                                </div>
                            @endif
                        </div>
                            <div class="form-group">
                                <input name="slug"  class="form-control @if($errors->has('slug')) is-invalid @endif" id="exampleInputAmount" type="hidden" value="#">
                                    @if($errors->has('slug'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('slug')}}
                                        </div>
                                    @endif
                            </div>
                        <div class="form-group">
                            <label class="control-label">Serial</label>
                            <input name="serial" value="{{$data==null ? '1' : $data->serial+1}}" min="0" class="form-control @if($errors->has('serial')) is-invalid @endif" type="number">
                            @if($errors->has('serial'))
                                <div class="invalid-feedback">
                                    {{$errors->first('serial')}}
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
                            <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add Menu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
