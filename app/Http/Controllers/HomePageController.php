<?php

namespace App\Http\Controllers;

use App\Models\BannerContato;
use App\Models\Menu;
use App\Models\Servico;
use App\Models\ConfigGeral;
use App\Models\Itens;

use Illuminate\Http\Request;

// Controller da HomePage

class HomePageController extends Controller
{
    public function index()
    {
    	$menus = Menu::get();
        $config_geral = ConfigGeral::get();
        $servicos = Servico::get();
        $itens = Itens::get();
        $banner_contato = BannerContato::get();
    	return view('site.landingpage' , compact('menus' , 'config_geral' ,'servicos' , 'itens' , 'banner_contato'));
    }
}
