<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigGeral extends Model
{
    use HasFactory;

    protected $table = 'config_geral';

    protected $fillable = [
        'email',
        'telefone',
        'titulo_botao',
        'url_botao',
        'logo',
        'endereco',
        'url_facebook',
        'url_instagram',
        'url_linkedin',
        'url_youtube',
    ];

    
}
