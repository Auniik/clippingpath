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
@stop