@extends('adminlte::page')

@section('title', 'AFr | Painel de Admininistração')

@section('content_header')

@stop

@section('content')

    <!-- Breadcumbs -->
    {{ Breadcrumbs::render() }}
    <!-- /.breadcumbs -->

    <div class="row">

        <div class="col-md-12">

        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title"> Records </h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <div class="btn-group">
                        <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-wrench"></i></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Add to Panel</a></li>
                            <li><a href="#">Manage Panel</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><span class="text-blue">Generate Report</span></a></li>
                        </ul>
                    </div>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">

                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="small-box bg-light-blue">
                            <div class="inner">
                                <h3>Modules</h3>
                                <h3>{{ $modules }}</h3>
                                <p>Last record: {{ $last_modules->created_at }}</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-sitemap"></i>
                            </div>
                            <a href="{{ Route('admin.modules.index') }}" class="small-box-footer">
                                More info <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="small-box bg-light-blue">
                            <div class="inner">
                                <h3>Groups</h3>
                                <h3>{{ $groups }}</h3>
                                <p>Last record: {{ $last_groups->created_at }}</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-group"></i>
                            </div>
                            <a href="{{ Route('admin.groups.index') }}" class="small-box-footer">
                                More info <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="small-box bg-light-blue">
                            <div class="inner">
                                <h3>Unities</h3>
                                <h3>{{ $unities }}</h3>
                                <p>Last record: {{ $last_unities->created_at }}</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <a href="{{ Route('admin.unities.index') }}" class="small-box-footer">
                                More info <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="small-box bg-light-blue">
                            <div class="inner">
                                <h3>Users</h3>
                                <h3>{{ $users }}</h3>
                                <p>Last record: {{ $last_users->created_at }}</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-user"></i>
                            </div>
                            <a href="{{ Route('admin.users.index') }}" class="small-box-footer">
                                More info <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="small-box bg-light-blue">
                            <div class="inner font-white">
                                <h3>Logs</h3>
                                <h3>{{ $access_logs }}</h3>
                                <p>Last record: {{ $last_access_logs->created_at }}</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-newspaper-o"></i>
                            </div>
                            <a href="{{ Route('admin.access_log.index') }}" class="small-box-footer">
                                More info <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        </div>

    </div>

@stop