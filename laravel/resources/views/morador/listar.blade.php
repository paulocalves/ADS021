@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Listagem de Moradores</div>
                <div class="panel-heading">
                    <a href="/morador/criar" class="btn btn-primary">Novo</a>
                </div>
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                    <td align="center"><b>Id</b></td>
                    <td align="center"><b>Morador</b></td>
                    <td align="center"><b>Unidade</b></td>
                    <td align="center"><b>Condomínio</b></td>
                    <td align="center"><b>Status</b></td>
                    <td colspan="2" align="center"><b>Ações </b></td>
                    </thead>
                    <tbody>
                        @foreach($moradores as $morador)
                        <tr>
                            <td align="center">{{$morador->id}}</td>
                            <td align="center">{{$morador->nome}}</td>
                            <td align="center">{{$morador->unidade->unidade}}</td>
                            <td align="center">{{$morador->condominio->nome}}</td>
                            <td align="center">{{$morador->situacao =='A'?'Ativo':'Inativo'}}</td>
                            <td align="center">
                                <a href="{{url('morador/'.$morador->id.'/editar')}}"><ion-icon name="create"></ion-icon></a>
                            </td>
                            <td align="center">
                                <a href="{{url('morador/'.$morador->id.'/remover')}}"><ion-icon name="trash">Remove</ion-icon></a>
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
