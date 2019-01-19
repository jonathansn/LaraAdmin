@extends('adminlte::page')

@section('title', 'AFr | Módulos')

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
                <form action="" method="post" id="filtering_form" class="filtering_form" autocomplete="off" data-ajax-list-info-url="" accept-charset="utf-8">
                    {{ csrf_field() }}

                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title"> Modules </h3>
                    </div>
                    <div class="box-body">
                        <div class="flexigrid" data-unique-hash="">
                            <div id="hidden-operations" class="hidden-operations"></div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="btn-group">
                                        <a class="print-anchor btn btn-primary btn-flat" data-toggle="modal" data-target="#modal-default">
                                            Create
                                        </a>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default btn-flat">Actions</button>
                                        <button type="button" class="btn btn-default btn-flat dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Print</a></li>
                                            <li><a href="#">Export</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" onclick="getValue();return false;" class="text-red">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <br>

                            @if ($message = Session::get('success'))

                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <p>
                                        {{ $message }}.
                                    </p>
                                </div>

                            @endif

                                <div id="ajax_list" class="ajax_list table-responsive">
                                    <div>
                                        <table class="table table-bordered table-hover" role="grid" id="dataTableDefault">
                                            <thead>
                                            <tr role="row">
                                                <th>
                                                </th>
                                                <th>
                                                    Name
                                                </th>
                                                <th>
                                                    Controll Class
                                                </th>
                                                <th>
                                                    Database Name
                                                </th>
                                                <th>
                                                    Created at
                                                </th>
                                                <th>
                                                    Updated at
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($modules as $module)

                                                <tr>
                                                    <td width="30">
                                                        <label class="ckbox ckbox-default">
                                                            <input type="checkbox" value="{{ $module->id }}" name="id">
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('admin.modules.show',$module->id) }}" title="Visualizar">
                                                            {{ $module->name }}
                                                        </a>
                                                    </td>
                                                    <td>
                                                        {{ $module->control_class }}
                                                    </td>
                                                    <td>
                                                        {{ $module->db_name }}
                                                    </td>
                                                    <td>
                                                        {{ $module->created_at }}
                                                    </td>
                                                    <td>
                                                        {{ $module->updated_at }}
                                                    </td>
                                                </tr>

                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        {{ $modules->links()  }}
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Content -->
    <div class="modal fade" id="modal-default">
        <!-- Modal Dialog -->
        <div class="modal-dialog">
            <!-- Modal Content -->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Create Module</h4>
                </div>
                <div class="modal-body">

                    <form action="{{ route('admin.modules.store') }}" method="post" class="form-horizontal" autocomplete="off" accept-charset="utf-8">
                    {{ csrf_field() }}

                        @if($errors->any())
                            <script>
                                window.onload = function(){
                                    $("#modal-default").modal();
                                }
                            </script>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <p>Preencha os campos obrigatórios!</p>
                            </div>
                        @endif

                        <div class="row {{ $errors->has('name') ? 'has-error' : '' }}" id="name_field_box">
                            <div class="form-display-as-box col-sm-2 control-label" id="name_display_as_box">
                                <label>Name</label>
                            </div>
                            <div class="col-sm-8" id="name_input_box">
                                <input id="field-name" class="form-control" name="name" value="{{ old('name') }}" maxlength="100" type="text">
                            </div>
                        </div>
                        <br>
                        <div class="row {{ $errors->has('control_class') ? 'has-error' : '' }}" id="name_field_box">
                            <div class="form-display-as-box col-sm-2 control-label" id="name_display_as_box">
                                <label>Classe de Controle</label>
                            </div>
                            <div class="col-sm-8" id="name_input_box">
                                <input id="field-name" class="form-control" name="control_class" value="{{ old('name') }}" maxlength="100" type="text">
                            </div>
                        </div>
                        <br>
                        <div class="row {{ $errors->has('db_name') ? 'has-error' : '' }}" id="name_field_box">
                            <div class="form-display-as-box col-sm-2 control-label" id="name_display_as_box">
                                <label>Name do Banco</label>
                            </div>
                            <div class="col-sm-8" id="name_input_box">
                                <input id="field-name" class="form-control" name="db_name" value="{{ old('name') }}" maxlength="100" type="text">
                            </div>
                        </div>
                        <br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal">Cancel</button>
                    <button type="reset" class="btn btn-info btn-flat pull-left">Reset</button>
                    <button type="submit" class="btn btn-primary btn-flat pull-left">Save</button>
                </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

@stop