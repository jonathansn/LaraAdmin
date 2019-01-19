@extends('adminlte::page')

@section('title', 'AFr | Alterar Senha')

@section('content_header')

@stop

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-key fa-fw"></i> Alterar Senha </h3>
                    </div>
                    <form action="#" method="post" class="form-horizontal" id="" autocomplete="off" accept-charset="UTF-8">
                        <div id="main-table-box" class="box-body">
                            <div class="row" id="name_field_box">
                                <div class="form-display-as-box col-sm-2 control-label" id="">
                                    <label> Senha atual </label>
                                </div>
                                <div class="col-sm-8" id="name_input_box">
                                    <input id="" class="form-control" name="" value="" maxlength="100" type="password">
                                </div>
                            </div>
                            <br>
                            <div class="row" id="description_field_box">
                                <div class="form-display-as-box col-sm-2 control-label" id="">
                                    <label> Nova senha </label>
                                </div>
                                <div class="col-sm-8" id="description_input_box">
                                    <input id="" class="form-control" name="" value="" maxlength="100" type="password">
                                </div>
                            </div>
                            <br>
                            <div class="row" id="description_field_box">
                                <div class="form-display-as-box col-sm-2 control-label" id="">
                                    <label> Repetir senha </label>
                                </div>
                                <div class="col-sm-8" id="description_input_box">
                                    <input id="" class="form-control" name="" value="" maxlength="100" type="password">
                                </div>
                            </div>
                            <br>
                        </div>
                        <div class="box-footer">
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <p>
                                        <button type="submit" id="form-button-save" class="btn btn-default btn-flat">
                                            <i class="fa fa-save" aria-hidden="true"></i> Save
                                        </button> &nbsp;
                                    </p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop