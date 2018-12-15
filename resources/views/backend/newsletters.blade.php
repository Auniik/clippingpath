@extends('layouts.admin_layout')
@section('title', 'Newsletters')
@section('admin_content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Newsletters</h1>
            <p>Newsletters from visitors</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{url('/')}}"> Visit Site</a></li>
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
                    <h3 class="tile-title">Manage Newsletter Request</h3>
                    <table class="table table-striped">

                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $sl=$newsletters->firstItem() ?>
                        @foreach($newsletters as $key => $newsletter)
                            <tr>
                                <td>{{$sl++}}</td>
                                <td>{{$newsletter->email}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-sm delete-data btn-danger" href="{{route('newsletters.destroy', $newsletter)}}"><i class="fa fa-trash-o fa-fw"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div>{{$newsletters->links()}}</div>
                </div>
            </div>
        </div>
    </div>
@endsection