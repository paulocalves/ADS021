<?php

namespace App\Http\Controllers;

use App\Unidade;
use App\Condominio;
use Illuminate\Http\Request;

class UnidadeController extends Controller {
    
    
    public function __construct() {
        
        $this->middleware('auth');
    }
    
    

    public function listar() {

        return view('unidade.listar', ['unidades' => Unidade::paginate(5),]);
    }

    public function criar() {

        return view('unidade.criar', ['unidade' => new Unidade(), 'condominios' => Condominio::all(), 'id_condominio'=>'']);
    }

    public function editar($id) {
        
        $id_cond = Unidade::find($id);
         return view('unidade.criar', ['unidade' => Unidade::find($id),'condominios' => Condominio::all(),'id_condominio' =>$id_cond->condominio_id]);
    }

    public function remover($id) {

        $unidade = Unidade::find($id);
        $unidade->delete();

        return redirect('unidade/listar');
    }

    public function salvar(Request $request) {
        $unidade = new Unidade();
        if ($request->has('id')) {
            $unidade = Unidade::find($request->id);
        }

        $unidade->unidade = $request->unidade;
        $unidade->proprietario = $request->proprietario;
        $unidade->cpf = $request->cpf;
        $unidade->email = $request->email;
        $unidade->telefone = $request->telefone;
        $unidade->condominio_id = $request->condominio_id;
        $unidade->save();
        return redirect('unidade/listar');
    }
    
      public function obterUnidade($id) {
          
          $condominio = Condominio::find($id);
          return $condominio->Unidade;
    }
    

}
