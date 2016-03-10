@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">INSCRIÇÃO - <strong>Campos seguidos de * são obrigatórios.</strong></div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <em> {!! session('message') !!}</em>
                            </div>
                        @endif

                        <form class="form-horizontal" role="form" method="POST" action="{{ route('cadastro.store') }}">
                            {!! csrf_field() !!}

                            <div class="form-group">
                                <label class="col-md-4 control-label">Nome *</label>
                                <div class="col-md-6">
                                    <input type="text" required="required" class="form-control" name="name"">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">E-mail</label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Cidade *</label>
                                <div class="col-md-4">
                                    <input type="text" required="required" class="form-control" name="city">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">UF *</label>
                                <div class="col-md-2">
                                    <input type="text" required="required" class="form-control" name="uf">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Telefone *</label>
                                <div class="col-md-4">
                                    <input type="text" required="required" class="form-control" name="phone">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Idade *</label>
                                <div class="col-md-2">
                                    <input type="text" required="required" class="form-control" name="age">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Sexo *</label>
                                <div class="col-md-4">
                                    <div class="checkbox">
                                        <label class="radio-inline">
                                            <input type="radio" checked name="sex" id="sexMasculino" value="Masculino"> Masculino
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="sex" id="sexFeminino" value="Feminino"> Feminino
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">Salvar</button>

                                    {{--<a class="btn btn-link" href="{{ url('/password/email') }}">Esqueceu sua senha ?</a>--}}
                                </div>
                            </div>
                        </form>
                        <br>
                        <h5>OBS: Taxa de inscrição de R$ 10,00.</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
