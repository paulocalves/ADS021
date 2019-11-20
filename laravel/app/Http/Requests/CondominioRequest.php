<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CondominioRequest extends FormRequest {

    public function authorize() {
        return true;
    }
     public function rules() {
        return [
            'nome' => 'required|max:255',
            'cnpj' => 'required|numeric',
            'endereco' => 'required|numeric',
            'cep' => 'required|numeric',
            'bairro' => 'required|numeric',
            'cidade' => 'required|numeric',
            'uf' => 'required|numeric',
        ];
    }
    public function messages() {
        return [
            'nome.required' => 'Nome Obrigatório',
            'cnpj.required' => 'CNPJ Obrigatório',
            'endereco.required' => 'Endereço Obrigatório',
            'cep.required' => 'CEP Obrigatório',
            'bairro.required' => 'Bairro Obrigatório',
            'cidade.required' => 'Cidade Obrigatório',
            'uf.required' => 'UF Obrigatório',
        ];
    }

}
