@extends('layouts.admin_layout')
@section('title', 'Users')
@section('admin_content')
          <div class="app-title">
                    <div>
                              <h1><i class="fa fa-user"></i> All User</h1>
                              <p>Manage all users</p>
                    </div>
                    <ul class="app-breadcrumb breadcrumb">
                              <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                              <li class="breadcrumb-item"><a href="{{url('users')}}">All User</a></li>
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
                    <div class="col-md-6">
                              <div class="tile">
                                        <h3 class="tile-title">Users</h3>
                                        <table class="table table-striped">

                                                  <thead>
                                                  <tr>
                                                            <th>#</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Actions</th>
                                                  </tr>
                                                  </thead>
                                                  <tbody>
                                                  <?php $sl=$users->firstItem() ?>
                                                  @foreach($users as $key => $user)
                                                  <tr>
                                                            <td>{{$sl++}}</td>
                                                            <td>{{$user->name}}</td>
                                                            <td>{{$user->email}}</td>
                                                            <td>
                                                                      <a class="btn btn-sm btn-primary" href="{{route('users.edit', $user)}}"><i class="fa fa-edit fa-fw"></i></a>
                                                                      @if($key==0)
                                                                                <button class="btn btn-sm delete-data btn-danger" disabled=""><i class="fa fa-trash  fa-fw"></i></button>
                                                                      @else
                                                                                <a class="btn btn-sm delete-data btn-danger" href="{{route('users.destroy', $user)}}"><i class="fa fa-trash  fa-fw"></i></a>
                                                                      @endif
                                                            </td>
                                                  </tr>
                                                  @endforeach
                                                  </tbody>
                                        </table>
                                        <div>{{$users->links()}}</div>
                              </div>
                    </div>
          </div>


@endsection
