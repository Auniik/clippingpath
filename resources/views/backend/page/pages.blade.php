@extends('layouts.admin_layout')
@section('title', 'Add Page for Navigation Menu')
@section('admin_content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-briefcase"></i> Manage Pages</h1>
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
                            <th>Submenu</th>
                            <th>Slug</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $sl=$pages->firstItem() ?>
                        @foreach($pages as $key => $page)
                            <tr>
                                <td>{{$sl++}}</td>
                                <td>{{$page->submenu->name}}</td>
                                <td>{{$page->submenu->slug}}</td>
                                <td>{{$page->title}}</td>
                                <td>{!! str_limIt($page->description, 150)!!}</td>

                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-sm btn-primary" href="{{route('pages.add' , $page->submenu->id)}}"><i class="fa fa-edit fa-fw"></i></a>
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