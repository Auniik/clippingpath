@extends('layouts.admin_layout')
@section('title', 'Feedbacks from clients')
@section('admin_content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-comments-o"></i> Feedbacks</h1>
            <p>Manage all feedbacks you created</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{url('feedbacks/create')}}">Add Feedbacks</a></li>
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
                    <h3 class="tile-title">Manage Client Feedbacks</h3>
                    <table class="table table-striped">

                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Thumbnail</th>
                            <th>ClientName</th>
                            <th>Designation</th>
                            <th>Feedback</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $sl=$feedbacks->firstItem() ?>
                        @foreach($feedbacks as $key => $feedback)
                            <tr>
                                <td>{{$sl++}}</td>
                                <td><img class="img-fluid rounded-circle" src="{{url($feedback->thumbnail)}}" alt="" style="max-height:70px; max-width:70px"></td>
                                <td>{{$feedback->name}}</td>
                                <td>{{($feedback->designation)}}</td>
                                <td>{{substr($feedback->feedback, 0,100)}}</td>

                                @if($feedback->status==1)
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
                                        {{--<a class="btn btn-sm btn-warning" href="{{route('feedbacks.show', $feedback)}}"><i class="fa fa-eye fa-fw"></i></a>--}}
                                        <a class="btn btn-sm btn-primary" href="{{route('feedbacks.edit', $feedback)}}"><i class="fa fa-edit fa-fw"></i></a>
                                        <a class="btn btn-sm delete-data btn-danger" href="{{route('feedbacks.destroy', $feedback)}}"><i class="fa fa-trash-o fa-fw"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div>{{$feedbacks->links()}}</div>
                </div>
            </div>
        </div>
    </div>


@endsection
