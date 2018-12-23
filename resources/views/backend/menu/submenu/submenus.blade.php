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
                            <th>Add Page</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $sl=$submenus->firstItem() ?>
                        @foreach($submenus as $key => $submenu)
                            <?php
                                $menu_name =str_replace(' ', '-', strtolower($submenu->menu->name));
                            ?>
                            <tr>
                                <td>{{$sl++}}</td>
                                <td>{{$submenu->name}}</td>
                                <td>
                                    <a href="{{url('/')}}/{{$menu_name}}/{{$submenu->slug}}">{{url('/')}}/{{$menu_name}}/{{$submenu->slug}}</a>
                                </td>
                                <td><a class="btn btn-sm  btn-default" href="{{route('pages.add', $submenu)}}">Add Page</a></td>
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
