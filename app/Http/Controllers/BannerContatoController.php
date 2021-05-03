<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateBannerContato;
use Illuminate\Http\Request;
use App\Models\BannerContato;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BannerContatoController extends Controller
{
    public function listar_banner()
    {
        $banners = BannerContato::get();
        return view('admin.bannercontato.index' , compact('banners'));
    }

    public function editar_banner($id)
    {
        $banners = BannerContato::find($id);
        return view('admin.bannercontato.edit' , compact('banners'));
    }

    public function update_banner(StoreUpdateBannerContato $request, $id)
    {

        if (!$banners = BannerContato::find($id)) {
            return redirect()->back();
        }

        $data = $request->all();

        if ($request->imagem->isValid())
            if (Storage::exists($banners->imagem))
                Storage::delete($banners->imagem);


        $nameFile = Str::of($request->titulo)->slug('-') . '.' . $request->imagem->getClientOriginalExtension();

        $image = $request->imagem->storeAs('banner', $nameFile);
        $data['imagem'] = $image;

        $banners->update($data);
  
        return redirect()
            ->route('listar.banner')
            ->with('message', 'Banner Atualizado com sucesso');                  
    }



    


}
