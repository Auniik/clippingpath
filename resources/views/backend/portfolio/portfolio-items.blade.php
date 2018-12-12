@extends('layouts.admin_layout')
@section('title', 'Manage Portfolio Items')
@section('admin_content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-briefcase"></i> Manage Portfolio Items</h1>
            <p>Manage all portfolio items you created</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{url('portfolio-items/create')}}">Add Portfolio Item</a></li>
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
                <h3 class="tile-title">Manage Portfolio Items</h3>
                <table class="table table-striped">

                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Ttile</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $sl=$items->firstItem() ?>
                    @foreach($items as $key => $item)
                        <tr>
                            <td>{{$sl++}}</td>
                            <td>{{$item->title}}</td>
                            <td>{!!substr($item->description, 0,50)!!}</td>

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
                                    <a class="btn btn-sm btn-warning" href="{{route('portfolio-items.show', $item)}}"><i class="fa fa-eye fa-fw"></i></a>
                                    <a class="btn btn-sm btn-primary" href="{{route('portfolio-items.edit', $item)}}"><i class="fa fa-edit fa-fw"></i></a>
                                    <a class="btn btn-sm delete-data btn-danger" href="{{route('portfolio-items.destroy', $item)}}"><i class="fa fa-trash-o fa-fw"></i></a>
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
