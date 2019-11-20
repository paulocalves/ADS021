@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <br>
                @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}} </li>
                    @endforeach
                    
                </ul>
                
                @endif;
                
                
                
                <form action="/condominio/salvar" method="post">
                    {{csrf_field()}}
                    <input type="hidden" id="id" name="id" value="{{$condominio->id}}"/>
                    <div class="form-group row">
                        <label for="nome" class="col-sm-2 col-form-label">Condomínio:</label>
                        <div class="col-sm-3">
                            <input type="text"  name="nome" class="form-control" id="nome" value="{{$condominio->nome}}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cnpj" class="col-sm-2 col-form-label">CNPJ:</label>
                        <div class="col-sm-3">
                            <input type="text" name="cnpj" class="form-control" id="cnpj" value="{{$condominio->cnpj}}"/>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="endereco" class="col-sm-2 col-form-label">Endereço:</label>
                        <div class="col-sm-3">
                            <input type="text" name="endereco" class="form-control" id="endereco" value="{{$condominio->endereco}}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cep" class="col-sm-2 col-form-label">Cep:</label>
                        <div class="col-sm-3">
                            <input type="text" name="cep" class="form-control" id="cep" value="{{$condominio->cep}}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bairro" class="col-sm-2 col-form-label">Bairro:</label>
                        <div class="col-sm-3">
                            <input type="text" name="bairro" class="form-control" id="bairro" value="{{$condominio->bairro}}"/>
                        </div>
                    </div>




                    <div class="form-group row">
                        <label for="cidade" class="col-sm-2 col-form-label">Cidade:</label>
                        <div class="col-sm-3">
                            <input type="text" name="cidade" class="form-control" id="cidade" value="{{$condominio->cidade}}"/>
                        </div>

                    </div>







                    <div class="form-group row">
                        <label for="uf" class="col-sm-2 col-form-label">UF:</label>
                        <div class="col-sm-3">
                            <select name="uf" class="form-control" >
                                <option value=""> - Selecione - </option>
                                <option value="DF">Distrito Federal</option>
                                <option value="SP">São Paulo</option>
                                <option value="RJ">Rio de Janeiro</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <a href="/condominio/listar" class="btn btn-danger">Voltar</a>
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
