@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Listagem de Unidades</div>
                <div class="panel-heading">
                    <a href="/unidade/criar" class="btn btn-primary">Novo</a>
                </div>
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                    <td align="center"><b>Id</b></td>
                    <td align="center"><b>Proprietário</b></td>
                    <td align="center"><b>Unidade</b></td>
                    <td align="center"><b>Condomínio</b></td>
                    <td colspan="2" align="center"><b>Ações </b></td>
                    </thead>
                    <tbody>
                        @foreach($unidades as $unidade)
                        <tr>
                            <td align="center">{{$unidade->id}}</td>
                            <td align="center">{{$unidade->proprietario}}</td>
                            <td align="center">{{$unidade->unidade}}</td>
                            <td align="center">{{$unidade->condominio->nome}}</td>
                            <td align="center">
                                <a href="{{url('unidade/'.$unidade->id.'/editar')}}"><ion-icon name="create"></ion-icon></a>
                            </td>
                            <td align="center">
                                <a href="{{url('unidade/'.$unidade->id.'/remover')}}"><ion-icon name="trash">Remove</ion-icon></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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
