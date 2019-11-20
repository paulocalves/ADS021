@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <br>
                <form action="/unidade/salvar" method="post">
                    {{csrf_field()}}
                    <input type="hidden" id="id" name="id" value="{{$unidade->id}}"/>
                    <div class="form-group row">
                        <label for="unidade" class="col-sm-2 col-form-label">Unidade:</label>
                        <div class="col-sm-3">
                            <input type="text"  name="unidade" class="form-control" id="unidade" value="{{$unidade->unidade}}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="proprietario" class="col-sm-2 col-form-label">Proprietario:</label>
                        <div class="col-sm-3">
                            <input type="text" name="proprietario" class="form-control" id="proprietario" value="{{$unidade->proprietario}}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cpf" class="col-sm-2 col-form-label">CPF:</label>
                        <div class="col-sm-3">
                            <input type="text" name="cpf" class="form-control" id="cpf" value="{{$unidade->cpf}}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">E-mail:</label>
                        <div class="col-sm-3">
                            <input type="text" name="email" class="form-control" id="email" value="{{$unidade->email}}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telefone" class="col-sm-2 col-form-label">Telefone:</label>
                        <div class="col-sm-3">
                            <input type="text" name="telefone" class="form-control" id="telefone" value="{{$unidade->telefone}}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="uf" class="col-sm-2 col-form-label">Condôminio:</label>
                        <div class="col-sm-3">
                            <select name="condominio_id" class="form-control" >
                                <option value=""> - Selecione - </option>
                                @foreach($condominios as $condominio)
                                <option value="{{$condominio->id}}"   {{$condominio->id ==$id_condominio?'selected':''}}      >{{$condominio->nome}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <a href="/unidade/listar" class="btn btn-danger">Voltar</a>
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
