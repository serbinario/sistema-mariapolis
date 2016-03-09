@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Cadastro de pessoas</div>
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form class="form-horizontal" role="form" method="POST" action="{{ route('cadastro.store') }}">
                            {!! csrf_field() !!}

                            <div class="form-group">
                                <label class="col-md-4 control-label">Nome</label>
                                <div class="col-md-6">
                                    <input type="text" required="required" class="form-control" name="name"">
                                </div>
                            </div>

                            {{--<div class="form-group">
                                <label class="col-md-4 control-label">E-mail</label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email">
                                </div>
                            </div>--}}

                            <div class="form-group">
                                <label class="col-md-4 control-label">Idade</label>
                                <div class="col-md-2">
                                    <input type="text" required="required" class="form-control" name="age">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Cidade</label>
                                <div class="col-md-4">
                                    <input type="text" required="required" class="form-control" name="city">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">UF</label>
                                <div class="col-md-2">
                                    <input type="text" required="required" class="form-control" name="uf">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Telefone</label>
                                <div class="col-md-4">
                                    <input type="text" required="required" class="form-control" name="phone">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Sexo</label>
                                <div class="col-md-4">
                                    <div class="checkbox">
                                        <label class="radio-inline">
                                            <input type="radio" name="sex" id="sexMasculino" value="1"> Masculino
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="sex" id="sexFeminino" value="2"> Feminino
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="1" name="isSubscriber"> É assinante da revista cidade nova?
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
