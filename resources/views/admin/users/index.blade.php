@extends('adminlte::page')

@section('title', 'AFr | Usuários')

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
                        <h3 class="box-title"> Users </h3>
                    </div>
                    <div class="box-body">
                        <div class="flexigrid" data-unique-hash="">
                            <div id="hidden-operations" class="hidden-operations"></div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="btn-group">
                                        <a class="print-anchor btn btn-primary btn-flat" data-toggle="modal" data-target="#modal-default" onclick="inputFocus()">
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
                                            <li><a href="#" class="text-red">Delete</a></li>
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

                            <form action="" method="post" id="filtering_form" class="filtering_form" autocomplete="off" data-ajax-list-info-url="" accept-charset="utf-8">

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
                                                    E-mail
                                                </th>
                                                <th>
                                                    Unity
                                                </th>
                                                <th>
                                                    Status
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

                                            @foreach($users as $user)

                                                <tr>
                                                    <td width="30">
                                                        <label class="ckbox ckbox-default">
                                                            <input type="checkbox" value="{{ $user->id }}" name="id">
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('admin.users.show',$user->id) }}" title="Show">
                                                            {{ $user->name }}
                                                        </a>
                                                    </td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>
                                                        @foreach($unities as $unity)
                                                            @if($unity->id == $user->unities_id)
                                                                {{ $unity->name }}
                                                            @endif
                                                        @endforeach
                                                    </td>

                                                    @if($user->status == 1)
                                                        <td class="text-center"><span class="label label-success">Active</span></td>

                                                    @else
                                                        <td class="text-center"><span class="label label-danger">Inactive</span></td>
                                                    @endif

                                                    <td>
                                                        {{ $user->created_at }}
                                                    </td>
                                                    <td>
                                                        {{ $user->updated_at }}
                                                    </td>

                                                </tr>

                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        {{ $users->links()  }}
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
                    <h4 class="modal-title">Create User</h4>
                </div>
                <div class="modal-body">

                <form action="{{ route('admin.users.store') }}" method="post" class="form-horizontal" autocomplete="off" accept-charset="utf-8">
                    {{ csrf_field() }}

                    @if($message = Session::get('success'))

                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <p>
                                {{ $message }}.
                            </p>
                        </div>

                    @endif

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
                    <div class="row {{ $errors->has('email') ? 'has-error' : '' }}" id="description_field_box">
                        <div class="form-display-as-box col-sm-2 control-label" id="description_display_as_box">
                            <label> Email </label>
                        </div>
                        <div class="col-sm-8" id="description_input_box">
                            <input id="field-email" class="form-control" name="email" value="{{ old('email') }}" maxlength="100" type="text">
                        </div>
                    </div>
                    <br>
                    <div class="row {{ $errors->has('password') ? 'has-error' : '' }}" id="description_field_box">
                        <div class="form-display-as-box col-sm-2 control-label" id="description_display_as_box">
                            <label> Password </label>
                        </div>
                        <div class="col-sm-8" id="description_input_box">
                            <input id="field-senha" class="form-control" name="password" value="" maxlength="100" type="password">
                        </div>
                    </div>
                    <br>
                    <div class="row {{ $errors->has('password_confirmation') ? 'has-error' : '' }}" id="description_field_box">
                        <div class="form-display-as-box col-sm-2 control-label" id="description_display_as_box">
                            <label> Confirme Password </label>
                        </div>
                        <div class="col-sm-8" id="description_input_box">
                            <input id="field-rsenha" class="form-control" name="password_confirmation" value="" maxlength="100" type="password">
                        </div>
                    </div>
                    <br>
                    <div class="row {{ $errors->has('status') ? 'has-error' : '' }}">
                        <div class="form-display-as-box col-sm-2 control-label" id="description_display_as_box">
                            <label> Status </label>
                        </div>
                        <div class="col-sm-8" id="description_input_box">
                            <select class="form-control select2 select2-unities" data-placeholder="Status"  style="width: 100%;" tabindex="-1" aria-hidden="true" name="status">
                                <option value=""></option>
                                <option value="1">Ativo</option>
                                <option value="0">Inativo</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row {{ $errors->has('groups') ? 'has-error' : '' }}">
                        <div class="col-sm-2 control-label" id="description_display_as_box">
                            <label> Group </label>
                        </div>
                        <div class="col-sm-8" id="description_input_box">
                            <select class="form-control select2 select2-groups" multiple="" data-placeholder="Grupos" style="width: 100%;" tabindex="-1" aria-hidden="true" name="groups[]">

                                @foreach($groups as $group)

                                    <option value="{{ $group->id }}">{{ $group->name }}</option>

                                @endforeach

                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row {{ $errors->has('unity') ? 'has-error' : '' }}">
                        <div class="form-display-as-box col-sm-2 control-label" id="description_display_as_box">
                            <label> Unity </label>
                        </div>
                        <div class="col-sm-8" id="description_input_box">
                            <select class="form-control select2 select2-unities" data-placeholder="Unidade"  style="width: 100%;" tabindex="-1" aria-hidden="true" name="unity">
                                <option value=""></option>

                                @foreach($unities as $unity)

                                    <option value="{{ $unity->id }}">{{ $unity->name }}</option>

                                @endforeach

                            </select>
                        </div>
                    </div>
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