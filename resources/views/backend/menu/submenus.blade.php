@extends('layouts.admin_layout')
@section('title', 'Manage Navigation Submenus')
@section('admin_content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-newspaper-o"></i> Manage Navigation Submenus</h1>
            <p>Manage Navigation Submenu for website</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{url('/menus')}}">Menus Management</a></li>
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
                <h3 class="tile-title col-lg-8 offset-lg-2">Add Submenu</h3><hr>
                <div class="tile-body col-lg-8 offset-lg-2">
                    <form action="{{url('submenus')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Menu</label>
                            <input value="{{$menu->name}}"  class="form-control" disabled  >
                            <input type="hidden" name="menu_id" value="{{$menu->id}}"  class="form-control" >
                        </div>
                        <div class="form-group">
                            <label class="control-label">Submenu Name</label>
                            <input name="name" id="name" class="form-control @if($errors->has('name')) is-invalid @endif" type="text" placeholder="example: Raster To Vector">
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
                                    <div class="input-group-prepend"><span class="input-group-text"><?php echo url('/').'/'.(str_replace(' ', '-', strtolower($menu->name))) ?>/</span></div>
                                    <input name="slug" value=""  class="form-control @if($errors->has('slug')) is-invalid @endif" id="exampleInputAmount" type="text"  >
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

    {{--//Manage Profile Link--}}
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="table table-responsive">
                    <h3 class="tile-title">List of Navigation Submenus</h3>
                    <table class="table table-striped">

                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Serial</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $sl=$submenus->firstItem() ?>
                        @foreach($submenus as $key => $submenu)
                            <tr>
                                <td>{{$sl++}}</td>
                                <td>{{$submenu->name}}</td>
                                <td><a href="{{url('/')}}/{{$submenu->slug}}">{{url('/')}}/{{$submenu->slug}}</a></td>
                                <td>{{$submenu->serial}}</td>
                                @if($submenu->status==1)
                                    <td>
                                        <span class="badge badge-success">Active</span>
                                    </td>
                                @else
                                    <td>
                                        <span class="badge badge-danger">Inactive</span>
                                    </td>
                                @endif
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-sm btn-primary" href="{{route('submenus.edit', $submenu)}}"><i class="fa fa-edit fa-fw"></i></a>
                                        <a class="btn btn-sm delete-data btn-danger" href="{{route('submenus.destroy' , $submenu)}}"><i class="fa fa-trash-o fa-fw"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div>{{$submenus->links()}}</div>
                </div>
            </div>
        </div>
    </div>

@endsection
