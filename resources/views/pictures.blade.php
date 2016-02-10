@extends('layouts.back')

@section('content')
    <div class="container">
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                        <li class="start active ">
                            <a href="#">
                                <i class="icon-home"></i>
                                <span class="title">Dashboard</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="icon-rocket"></i>
                                <span class="title">Hostel</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ url('/admin/new') }}">
                                        Add New</a>
                                </li>
                                <li>
                                    <a href="{{ url('/admin/rooms') }}">
                                        Add Rooms</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ url('admin/pictures') }}">
                                <i class="glyphicon-bed"></i>
                                <span class="title">Add Pictures for Hostels</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="icon-basket"></i>
                                <span class="title">Orders</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">
                                        <i class="icon-home"></i>
                                        Dashboard</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-handbag"></i>
                                        Products</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-pencil"></i>
                                        Product Edit</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <div class="page-content">

                    <!-- BEGIN PAGE HEADER-->
                    <h3 class="page-title">
                        Dashboard</h3>
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>
                                <a href="#">Home</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="#">Hostel</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="#">Pictures</a>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN NEW HOSTEL -->
                    <div class="row">
                        <div class="portlet light bordered">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-equalizer font-green-haze"></i>
                                    <span class="caption-subject font-green-haze bold uppercase">Add Pictures</span>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <form class="form-horizontal form" method="POST" action="{{ url('admin/pictures') }}" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                @if (Session::has('message'))
                                                    <p class="alert alert-info">{{ Session::get('message') }}</p>
                                                @endif
                                            </div>
                                            <div class="col-md-8 col-md-offset-2">
                                                <div class="form-group{!! $errors->has('hostel_id') ? ' has-error' : '' !!}">
                                                    <label class="control-label col-md-3">Select Hostel</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control" name="hostel_id">
                                                            <option value="">Choose hostel...</option>
                                                            @foreach($hostels as $hostel)
                                                                <option value="{!! $hostel->id !!}">{!! $hostel->name !!}</option>
                                                            @endforeach
                                                        </select>
                                                        @if ($errors->has('hostel_id'))
                                                            <span class="help-block">
                                                            <strong>{{ $errors->first('hostel_id') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-md-offset-2">
                                                <div class="form-group{!! $errors->has('hostel_pix') ? ' has-error' : '' !!}">
                                                    <label class="control-label col-md-3">Choose Picture(s)</label>
                                                    <div class="col-md-9">
                                                        {{--<input type="file" multiple class="form-control" name="hostel_pix[]"/>--}}
                                                        {!! Form::file('hostel_pix[]', array('multiple' => true, 'class'=>'form-control')) !!}
                                                        @if ($errors->has('hostel_pix'))
                                                            <span class="help-block">
                                                            <strong>{{ $errors->first('hostel_pix') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-offset-10 col-md-2">
                                                        <input value="Upload Pictures" type="submit" class="btn green"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- END NEW HOSTEL -->
                    <div class="clearfix">
                    </div>

                    <div class="row">

                    </div>
                    <div class="clearfix">
                    </div>
                </div>

                <!-- BEGIN QUICK SIDEBAR -->
                <!-- END QUICK SIDEBAR -->
            </div>
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->
            <!--Cooming Soon...-->
            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
    </div>
@endsection