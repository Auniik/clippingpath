@extends('layouts.admin_layout')
@section('title', 'Order Details')
@section('admin_content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-briefcase"></i> View Portfolio Item</h1>
            <p>Manage all portfolio items you created</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{url('portfolio-items')}}">Portfolio Items</a></li>
        </ul>
    </div>

    <div class="col-md-12">
        <div class="tile">
            <h3 class="tile-title">View Portfolio Item</h3>
            <hr>
            <div class="tile-body">
                {{--<form class="form-horizontal">--}}
                <div class="form-group row">
                    <label class="control-label col-md-3">Full Name :</label>
                    <div class="col-md-8">
                        <h4>{{$order->first_name.' ' .$order->last_name }}</h4>
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <label class="control-label col-md-3">Email :</label>
                    <div class="col-md-8">
                        {{$order->email}}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Services :</label>
                    <div class="col-md-8">
                        <h5 class="text-black-50">{!!$order->service!!}{!!$order->optional_service==null ? '' : ', <br>'.$order->optional_service!!}</h5>
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <label class="control-label col-md-3">Image Quantity :</label>
                    <div class="col-md-8">
                        <h3>{{$order->image_quantity }}</h3>
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <label class="control-label col-md-3">Quantity Need to EDIT:</label>
                    <div class="col-md-8">
                        <h5 class="text-black-50">{{$order->yearly_quantity }}/Year</h5>
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <label class="control-label col-md-3">Return File Format :</label>
                    <div class="col-md-8">
                        <h5 class="text-black-50">{{$order->return_file_format }}/Year</h5>
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <label class="control-label col-md-3">Additional Message</label>
                    <div class="col-md-8">
                        <h5 class="text-black-50">{{$order->additional_comment}}</h5>
                    </div>
                </div>
                <hr>


                <div class="form-group row">
                    <label class="control-label col-md-3"></label>
                    <div class="col-md-8">
                        <div class="pull-right">
                            <a class="btn btn-md delete-data btn-outline-danger" href="{{route('orders.destroy', $order)}}"><i class="fa fa-trash-o fa-fw"></i> Delete</a>

                        </div>
                    </div>
                </div>
                {{--</form>--}}
            </div>
        </div>
    </div>

@endsection