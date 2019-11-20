<?php

namespace App\Http\Controllers;

use App\Morador;
use App\Unidade;
use App\Condominio;
use Illuminate\Http\Request;

class MoradorController extends Controller
{
    
     
    public function __construct() {
        
        $this->middleware('auth');
    }
    
    
    public function listar (){
        
        return view('morador.listar',['moradores' => Morador::paginate(5)]);
    }
    
    public function criar (){
        
        return view('morador.criar',['morador'=>new Morador(), 'condominios' => Condominio::all(), 'id_condominio'=>'','unidades' => Unidade::all(), 'id_unidade'=>'']);
    }
    
    public function editar ($id){
        
        return Morador::find($id);
    }
    
    public function remover ($id){
        
        $morador = Morador::find($id);
        $morador->delete();
        
        return redirect('morador/listar');
    }
    
    public function salvar (Request $request){
        $morador =  new Morador();
        if($request->has('id')){
            $morador = Morador::find($request->id);
        }

        $morador->nome = $request->nome;
        $morador->cpf = $request->cpf;
        $morador->email = $request->email;
        $morador->telefone = $request->telefone;
        $morador->placa = $request->placa;
        $morador->veiculo = $request->veiculo;
        $morador->situacao = $request->situacao;
        $morador->condominio_id = $request->condominio_id;
        $morador->unidade_id = $request->unidade_id;
        $morador->save();
        return redirect('morador/listar');
    }
    
}
