@extends('layouts.admin_layout')
@section('title', 'Manage Slider Items')
@section('admin_content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-briefcase"></i> Manage Slider Items</h1>
            <p>Manage all slider items you created</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{url('sliders/create')}}">Add Slider Item</a></li>
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
                    <h3 class="tile-title">Manage Slider Items</h3>
                    <table class="table table-striped">

                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Background</th>
                            <th>Wide Image</th>
                            <th>Square Image</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $sl=$items->firstItem() ?>
                        @foreach($items as $key => $item)
                            <tr>
                                <td>{{$sl++}}</td>
                                <td><img class="img-fluid" src="{{$item->background_thumbnail}}" alt="" height="40px" width="80"></td>
                                <td><img class="img-fluid" src="{{$item->thumbnail_wide}}" alt="" height="40px" width="80"></td>
                                <td><img class="img-fluid" src="{{$item->thumbnail_square}}" alt="" height="40px" width="80"></td>

                                @if($item->status==1)
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
                                        {{--<a class="btn btn-sm btn-warning" href="{{route('sliders.show', $item)}}"><i class="fa fa-eye fa-fw"></i></a>--}}
                                        <a class="btn btn-sm btn-primary" href="{{route('sliders.edit', $item)}}"><i class="fa fa-edit fa-fw"></i></a>
                                        <a class="btn btn-sm delete-data btn-danger" href="{{route('sliders.destroy', $item)}}"><i class="fa fa-trash-o fa-fw"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div>{{$items->links()}}</div>
                </div>
            </div>
        </div>
    </div>


@endsection
