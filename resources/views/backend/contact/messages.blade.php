@extends('layouts.admin_layout')
@section('title', 'Messages')
@section('admin_content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-newspaper-o"></i> Messages</h1>
            <p>Manage all message from visitors</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{url('contact/config')}}">Contact Page Configuration</a></li>
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
                    <h3 class="tile-title">Messages</h3>
                    <table class="table table-striped">

                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Country</th>
                            <th>Subject</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $sl=$messages->firstItem() ?>
                        @foreach($messages as $key => $message)
                            <tr>
                                <td>{{$sl++}}</td>
                                <td>{{$message->name}}</td>
                                <td>{{$message->email}}</td>
                                <td>{{$message->phone}}</td>
                                <td>{{$message->country}}</td>
                                <td>{{$message->subject}}</td>
                                <td>{!!substr($message->message, 0,50)!!}</td>

                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-sm btn-warning" href=""><i class="fa fa-eye fa-fw"></i></a>
                                        <a class="btn btn-sm delete-data btn-danger" href="{{route('message.destroy', $message)}}"><i class="fa fa-trash-o fa-fw"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div>{{$messages->links()}}</div>
                </div>
            </div>
        </div>
    </div>


@endsection
