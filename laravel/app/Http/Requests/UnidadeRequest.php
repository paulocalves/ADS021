<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UnidadeRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }
    
    public function rules()
    {
        return [
          'unidade'=>'required|numeric'
        ];
    }
    
    public function messages()
    {
        return [
          'unidade.required'=>'Campo unidade Obrigatório'  
        ];
    }
    
    
}
