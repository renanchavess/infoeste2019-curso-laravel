<?php

namespace App\Http\Controllers;

use App\Foto;
use App\produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FotoController extends Controller
{
    public function create(int $produto_id)
    {
        $produto = Produto::find($produto_id);

        if(isset($produto))
        {
            return view('foto.create', compact(['produto']));
        }

        return redirect('/produto');
    }

    public function store(Request $request)
    {
        $produto = Produto::find($request->input('produto_id'));

        if(!empty($produto))
        {
            $path =  $request->file('arquivo')->store('imagens/produtos', 'public');

            $foto = new Foto();        
            $foto->path = $path;
            $foto->produto_id = $produto->id;
           
            $foto->save();
        }

        return redirect("/produto/$produto->id/fotos");
    }

    public function destroy(int $id)
    {
        $foto = Foto::find($id);

        if(isset($foto))
        {
            $produto_id = $foto->produto_id;            
            unlink('storage/'.$foto->path);
            $foto->delete();
            
            return redirect("/produto/$produto_id/fotos");
        }
        else
            return redirect('/produto');
    }
}
