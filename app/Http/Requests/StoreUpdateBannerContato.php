<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateBannerContato extends FormRequest
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
            'imagem' => ['required' , 'max:3000', 'image'],            
            'titulo' => ['required' ,'min:4', 'max:50'],            
            'conteudo' => ['required' ,'min:20', 'max:150'],            
            'numero' => ['required' ,'min:10', 'max:20'],            
            'url_numero' => ['required' ,'min:10', 'max:100'],            
        ];
    }
}
