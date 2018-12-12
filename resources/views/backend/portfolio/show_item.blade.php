@extends('layouts.admin_layout')
@section('title', 'View Portfolio Item')
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
                        <label class="control-label col-md-3">Title:</label>
                        <div class="col-md-8">
                            <h4>{{$portfolio_item->title}}</h4>
                        </div>
                    </div>
                <hr>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Description:</label>
                        <div class="col-md-8">
                            {!!$portfolio_item->description!!}
                        </div>
                    </div>
                <hr>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Before Image:</label>
                        <div class="col-md-8">
                            <img class="img-fluid" src="{{url($portfolio_item->before_thumbnail)}}" alt="">
                        </div>
                    </div>
                <hr>
                    <div class="form-group row">
                        <label class="control-label col-md-3">After Image:</label>
                        <div class="col-md-8">
                            <img class="img-fluid" src="{{url($portfolio_item->after_thumbnail)}}" alt="">
                        </div>
                    </div>
                <hr>
                    <div class="form-group row">
                        <label class="control-label col-md-3"></label>
                        <div class="col-md-8">
                            <div class="pull-right">
                                <a class="btn btn-md btn-outline-primary" href="{{route('portfolio-items.edit', $portfolio_item)}}"><i class="fa fa-edit fa-fw"></i> Edit</a>
                                <a class="btn btn-md delete-data btn-outline-danger" href="{{route('portfolio-items.destroy', $portfolio_item)}}"><i class="fa fa-trash-o fa-fw"></i> Delete</a>

                            </div>
                        </div>
                    </div>
                <hr>


                {{--</form>--}}
            </div>
        </div>
    </div>

@endsection