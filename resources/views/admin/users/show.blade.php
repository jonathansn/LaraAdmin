@extends('adminlte::page')

@section('title', 'AFr | Usuários')

@section('content_header')

@stop

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-eye fa-fw"></i> Visualizar Usuário </h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="box-body box-profile">
                                <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">

                                <h3 class="profile-username text-center">Nina Mcintire</h3>

                                <p class="text-muted text-center">Software Engineer</p>

                                <ul class="list-group list-group-unbordered">
                                    <li class="list-group-item">
                                        <b>Followers</b> <a class="pull-right">1,322</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Following</b> <a class="pull-right">543</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Friends</b> <a class="pull-right">13,287</a>
                                    </li>
                                </ul>

                                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <form action="" method="post" class="form-horizontal" autocomplete="off" accept-charset="utf-8">
                                <div id="main-table-box" class="box-body">

                                    @if($errors->any())
                                        <div class="alert alert-warning alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <h4><i class="icon fa fa-check"></i> Erro!</h4>
                                            @foreach($errors->all() as $error)
                                                <p> {{ $error }} </p>
                                            @endforeach
                                        </div>
                                    @endif

                                    <div class="row" id="name_field_box">
                                        <div class="form-display-as-box col-sm-2 control-label" id="name_display_as_box">
                                            <label>Name</label>
                                        </div>
                                        <div class="col-sm-8" id="name_input_box">
                                            <input id="field-name" class="form-control" name="name" value="{{ $user->name }}" maxlength="100" type="text" disabled>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row" id="description_field_box">
                                        <div class="form-display-as-box col-sm-2 control-label" id="description_display_as_box">
                                            <label> E-mail </label>
                                        </div>
                                        <div class="col-sm-8" id="description_input_box">
                                            <input id="field-description" class="form-control" name="email" value="{{ $user->email }}" maxlength="100" type="text" disabled>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row" id="description_field_box">
                                        <div class="form-display-as-box col-sm-2 control-label" id="description_display_as_box">
                                            <label> Status </label>
                                        </div>

                                        @if($user->status == 1)
                                            <div class="col-sm-8" id="description_input_box">
                                                <input id="field-description" class="form-control bg-green" name="password_confirmation" value="Ativo" maxlength="100" type="text" disabled>
                                            </div>

                                        @else
                                            <div class="col-sm-8" id="description_input_box">
                                                <input id="field-description" class="form-control bg-red" name="password_confirmation" value="Inativo" maxlength="100" type="text" disabled>
                                            </div>
                                        @endif

                                    </div>
                                    <br>
                                    <div class="row" id="description_field_box">
                                        <div class="form-display-as-box col-sm-2 control-label" id="description_display_as_box">
                                            <label> Repetir senha </label>
                                        </div>
                                        <div class="col-sm-8" id="description_input_box">
                                            <input id="field-description" class="form-control" name="password_confirmation" value="" maxlength="100" type="password">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row" id="description_field_box">
                                        <div class="form-display-as-box col-sm-2 control-label" id="description_display_as_box">
                                            <label> Repetir senha </label>
                                        </div>
                                        <div class="col-sm-8" id="description_input_box">
                                            <input id="field-description" class="form-control" name="password_confirmation" value="" maxlength="100" type="password">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row" id="description_field_box">
                                        <div class="form-display-as-box col-sm-2 control-label" id="description_display_as_box">
                                            <label> Repetir senha </label>
                                        </div>
                                        <div class="col-sm-8" id="description_input_box">
                                            <input id="field-description" class="form-control" name="password_confirmation" value="" maxlength="100" type="password">
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <p>
                                                <a type="button" id="cancel-button" class="btn btn-default btn-flat" href="{{ route('admin.users.index') }}">
                                                    <i class="fa fa-arrow-left text-blue" aria-hidden="true"></i> Voltar
                                                </a> &nbsp;
                                            </p>
                                        </div>
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