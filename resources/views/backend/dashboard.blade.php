@extends('layouts.admin_layout')
@section('title', 'Dashboard')
@section('admin_content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
            <p>Hello Admin, Welcome to  your website</p>
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
                    <h3 class="tile-title">Order Requests</h3>
                    <table class="table table-striped">

                        <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Image Quantity</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $sl=$orders->firstItem() ?>
                        @foreach($orders as $key => $order)
                            <tr>
                                <td>{{$sl++}}</td>
                                <td>{{$order->first_name}}</td>
                                <td>{{$order->last_name}}</td>
                                <td>{{$order->email}}</td>
                                <td>{{$order->image_quantity}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-sm btn-warning" href="{{route('orders.show', $order)}}"><i class="fa fa-eye fa-fw"></i></a>
                                        <a class="btn btn-sm delete-data btn-danger" href="{{route('orders.destroy', $order)}}"><i class="fa fa-trash-o fa-fw"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div>{{$orders->links()}}</div>
                </div>
            </div>
        </div>
    </div>
@stop