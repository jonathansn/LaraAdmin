@extends('adminlte::page')

@section('title', 'AFr | Log Accesses')

@section('content_header')

@stop

@section('content')

    <!-- Breadcumbs -->
    {{ Breadcrumbs::render() }}
    <!-- /.breadcumbs -->

    <div class="row">
        <div class="col-lg-12">
            <div><script type="text/javascript">

                </script>

                <div id="list-report-error" class="report-div error "></div>

                <div id="list-report-success" class="report-div success report-list"></div>

                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title"> Access Log </h3>
                    </div>
                    <div class="box-body">
                        <div class="flexigrid" data-unique-hash="">
                            <div id="hidden-operations" class="hidden-operations"></div>

                            <form action="" method="post" id="filtering_form" class="filtering_form" autocomplete="off" data-ajax-list-info-url="" accept-charset="utf-8">

                                <div id="ajax_list" class="ajax_list table-responsive">
                                    <div>
                                        <table class="table table-bordered table-hover" role="grid" id="dataTableDefault">
                                            <thead>
                                            <tr role="row">
                                                <th>
                                                </th>
                                                <th>
                                                    ID
                                                </th>
                                                <th>
                                                    User_ID
                                                </th>
                                                <th>
                                                    Email
                                                </th>
                                                <th>
                                                    Created at
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($access_log as $log)

                                                <tr>
                                                    <td width="30">
                                                        <label class="ckbox ckbox-default">
                                                            <input type="checkbox" value="{{ $log->id }}" name="id">
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                    <td>{{ $log->id }}</td>
                                                    <td>{{ $log->users_id }}</td>
                                                    <td>{{ $log->email }}</td>
                                                    <td>{{ $log->created_at }}</td>

                                                </tr>

                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        {{ $access_log->links()  }}
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop