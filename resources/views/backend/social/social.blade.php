@extends('layouts.admin_layout')
@section('title', 'Manage Social Links')
@section('admin_content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-newspaper-o"></i> Manage Social Links</h1>
            <p>Manage social media profile links for website</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{url('/')}}">Visit Site</a></li>
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
                <h3 class="tile-title col-lg-8 offset-lg-2">Add Social Link</h3><hr>
                <div class="tile-body col-lg-8 offset-lg-2">
                    <form action="{{url('socials')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Social Name</label>
                            <select id="icon" class="form-control @if($errors->has('icon')) is-invalid @endif" name="icon">
                                <option value="">--Select Social Name--</option>
                                <option value="fa fa-facebook"> Facebook</option>
                                <option value="fa fa-twitter"> Twitter</option>
                                <option value="fa fa-skype"> Skype</option>
                                <option value="fa fa-google"> Google+</option>
                                <option value="fa fa-instagram"> Instagram</option>
                                <option value="fa fa-linkedin"> Linkedin</option>
                                <option value="fa fa-reddit"> Reddit</option>
                                <option value="fa fa-pinterest"> Pinterest</option>
                                <option value="fa fa-tumblr"> Tumblr</option>
                                <option value="fa fa-vine"> Vine</option>
                                @if($errors->has('icon'))
                                    <div class="help-block">
                                        {{$errors->first('icon')}}
                                    </div>
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Profile Link</label>
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputAmount">Enter  valid profile link</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text">http://</span></div>
                                    <input name="profile_link" class="form-control @if($errors->has('icon')) is-invalid @endif" id="exampleInputAmount" type="text" placeholder="example: www.facebook.com/username">
                                    @if($errors->has('profile_link'))
                                        <div class="invalid-feedback">
                                            {{$errors->first('profile_link')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="animated-radio-button">
                            <label>Publication Status</label>
                            <div >
                                <label class="form-check-label">
                                    <input type="radio" name="status" class="form-check-input" value="1" checked="checked"><span class="label-text">Active</span>
                                </label>
                            </div>

                            <div>
                                <label class="form-check-label">
                                    <input type="radio" name="status" class="form-check-input" value="0"><span class="label-text">Inactive</span>
                                </label>
                            </div>
                            @if($errors->has('status'))
                                <div class="invalid-feedback">
                                    {{$errors->first('status')}}
                                </div>
                            @endif
                        </div>
                        <div class="tile-footer">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add Social Link</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{--//Manage Profile Link--}}
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="table table-responsive">
                    <h3 class="tile-title">Profile Links</h3>
                    <table class="table table-striped">

                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Icon</th>
                            <th>Profile URL</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $sl=$socials->firstItem() ?>
                        @foreach($socials as $key => $social)
                            <tr>
                                <td>{{$sl++}}</td>
                                <td><i style="font-size:30px" class="{{$social->icon}}"></i></td>
                                <td>{{$social->profile_link}}</td>
                                @if($social->status==1)
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
                                        <a class="btn btn-sm delete-data btn-danger" href="{{route('socials.destroy' , $social)}}"><i class="fa fa-trash-o fa-fw"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div>{{$socials->links()}}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
