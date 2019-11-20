@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <br>
                <form action="/morador/salvar" method="post">
                    {{csrf_field()}}
                    <input type="hidden" id="id" name="id" value="{{$morador->id}}"/>

                    <div class="form-group row">
                        <label for="nome" class="col-sm-2 col-form-label">Nome:</label>
                        <div class="col-sm-3">
                            <input type="text"  name="nome" class="form-control" id="nome" value="{{$morador->unidade}}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cpf" class="col-sm-2 col-form-label">CPF:</label>
                        <div class="col-sm-3">
                            <input type="text" name="cpf" class="form-control" id="cpf" value="{{$morador->cpf}}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">E-mail:</label>
                        <div class="col-sm-3">
                            <input type="text" name="email" class="form-control" id="email" value="{{$morador->email}}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telefone" class="col-sm-2 col-form-label">Telefone:</label>
                        <div class="col-sm-3">
                            <input type="text" name="telefone" class="form-control" id="telefone" value="{{$morador->telefone}}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="placa" class="col-sm-2 col-form-label">Placa:</label>
                        <div class="col-sm-3">
                            <input type="text" name="placa" class="form-control" id="placa" value="{{$morador->telefone}}"/>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="veiculo" class="col-sm-2 col-form-label">Veiculo:</label>
                        <div class="col-sm-3">
                            <input type="text" name="veiculo" class="form-control" id="veiculo" value="{{$morador->telefone}}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="situacao" class="col-sm-2 col-form-label">Situação:</label>
                        <div class="col-sm-3">
                            <select name="situacao" class="form-control" >
                                <option value="">- Selecione -</option>
                                <option value="A">Ativo</option>
                                <option value="I">Inativo</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="condominio_id" class="col-sm-2 col-form-label">Condôminio:</label>
                        <div class="col-sm-3">
                            <select name="condominio_id" class="form-control" id="condominio_id">
                                <option value=""> - Selecione - </option>
                                @foreach($condominios as $condominio)
                                <option value="{{$condominio->id}}"   {{$condominio->id ==$id_condominio?'selected':''}}      >{{$condominio->nome}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="unidade_id" class="col-sm-2 col-form-label">Unidade:</label>
                        <div class="col-sm-3">
                            <select name="unidade_id" class="form-control" id="unidade_id" >
                                <option value=""> - Selecione - </option>
                            </select>
                        </div>

                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <a href="/morador/listar" class="btn btn-danger">Voltar</a>
                            <button type="submit" class="btn btn-success">Salvar</button>
                        </div>
                    </div>
                </form>
                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>

    $('#condominio_id').change(function () {

    var idCondominio = $(this).val();
    $.get('/unidade/obterUnidade/' + idCondominio,function(unidades) {

            $('#unidade_id').empty();
            $('#unidade_id').append('<option value=""> - Selecione - </option>');
            $.each(unidades, function (key, value) {

            $('#unidade_id').append('<option value = ' + value.id + ' > ' +value.unidade + '</option>');
            });
            });
    });
</script>

@endsection
