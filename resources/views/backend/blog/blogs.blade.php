@extends('layouts.admin_layout')
@section('title', 'Blogs')
@section('admin_content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-newspaper-o"></i> Blogs</h1>
            <p>Manage all blogs you created</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{url('blogs/create')}}">Add Blogs</a></li>
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
                    <h3 class="tile-title">Blogs</h3>
                    <table class="table table-striped">

                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Thumbnail</th>
                            <th>Headline</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $sl=$blogs->firstItem() ?>
                        @foreach($blogs as $key => $blog)
                            <tr>
                                <td>{{$sl++}}</td>
                                <td><img src="{{url($blog->thumbnail)}}" alt="" style="height:60px; width: 60px"></td>
                                <td>{{$blog->headline}}</td>
                                <td>{!!substr($blog->description, 0,50)!!}</td>

                                @if($blog->status==1)
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
                                        <a class="btn btn-sm btn-warning" href="{{route('blogs.show', $blog)}}"><i class="fa fa-eye fa-fw"></i></a>
                                        <a class="btn btn-sm btn-primary" href="{{route('blogs.edit', $blog)}}"><i class="fa fa-edit fa-fw"></i></a>
                                        <a class="btn btn-sm delete-data btn-danger" href="{{route('blogs.destroy', $blog)}}"><i class="fa fa-trash-o fa-fw"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div>{{$blogs->links()}}</div>
                </div>
            </div>
        </div>
    </div>


@endsection
