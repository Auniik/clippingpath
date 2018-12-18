@extends('layouts.admin_layout')
@section('title', 'Add Page for Navigation Menu')
@section('admin_content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-briefcase"></i> Add Page</h1>
            <p>Add page for navigation menu</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{url('menus')}}">Manage Menus</a></li>
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
            <div class="table table-responsive">
                <h3 class="tile-title">List of Submenus</h3>
                <table class="table table-striped">

                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Parent Menu</th>
                        <th>Page Name</th>
                        <th>Slug</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $sl=$pages->firstItem() ?>
                    @foreach($pages as $key => $page)
                        <tr>
                            <td>{{$sl++}}</td>
                            <td>{{$page->menu->menu}}</td>
                            <td>{{$page->name}}</td>
                            <td>{{$page->slug}}</td>
                            @if($page->status==1)
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
                                    <a class="btn btn-sm btn-primary" href="{{route('pages.edit' , $page)}}"><i class="fa fa-edit fa-fw"></i></a>
                                    <a class="btn btn-sm delete-data btn-danger" href="{{route('pages.destroy' , $page)}}"><i class="fa fa-trash-o fa-fw"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div>{{$pages->links()}}</div>
            </div>
        </div>
    </div>
</div>
@endsection