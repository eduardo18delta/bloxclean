<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateServicos extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'image' => ['required' , 'max:2000', 'image'],            
            'titulo_item' => ['required' ,'min:4', 'max:100'],            
            'conteudo' => ['required' ,'min:20', 'max:500'],            
        ];
    }
}
