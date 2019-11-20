<?php

namespace App\Http\Controllers;

use App\Condominio;
use Illuminate\Http\Request;
use App\Http\Requests\CondominioRequest;

class CondominioController extends Controller
{
    
    
    public function __construct() {
        
        $this->middleware('auth');
    }
    
    

    public function listar (){
        
        return view('condominio.listar',['condominios' =>Condominio::paginate(5)]);
    }
    
    public function criar (){
        
        return view('condominio.criar',['condominio'=>new Condominio()]);
    }
    
    public function editar ($id){
        
        
        return view('condominio.criar',['condominio'=>Condominio::find($id)]);
    }
    
    public function remover ($id){
        
        $condominio = Condominio::find($id);
        $condominio->delete();
        return redirect('condominio/listar');
    }
    
    public function salvar (CondominioRequest $request){
        $condominio =  new  Condominio();
        if($request->has('id')){
            $condominio = Condominio::find($request->id);
        }

        $condominio->nome = $request->nome;
        $condominio->cnpj = $request->cnpj;
        $condominio->endereco = $request->endereco;
        $condominio->cep = $request->cep;
        $condominio->bairro = $request->bairro;
        $condominio->cidade = $request->cidade;
        $condominio->uf = $request->uf;
        $condominio->save();
        return redirect('condominio/listar');
    }
}
