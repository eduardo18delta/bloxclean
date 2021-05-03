<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use LaravelLegends\PtBrValidator\Rules\FormatoCpf;

class StoreUpdateConfigGeral extends FormRequest
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
            'logo' => ['required' , 'max:2000', 'image'],            
            'email' => ['required' ,'min:10', 'max:160', 'email'],
            'telefone' => ['required' ,'min:10', 'max:160'],
            'titulo_botao' => ['required' ,'min:5', 'max:160'],
            'url_botao' => ['required' ,'min:4', 'max:160'],
            'endereco' => ['required' ,'min:4', 'max:160'],
            'url_facebook' => ['required' ,'min:4', 'max:160'],
            'url_instagram' => ['required' ,'min:4', 'max:160'],
            'url_twitter' => ['required' ,'min:4', 'max:160'],
            'url_youtube' => ['required' ,'min:4', 'max:160'],
        ];
    }
}
