<?php

namespace App\Http\Controllers;

use App\produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $produtos = Produto::paginate(5);
        return view('produto.index', compact(['produtos']));
    }

    public function create()
    {
        return view('produto.create');        
    }

    public function store(Request $request)
    {        
        $regras = [
            'nome' => 'required|min:3|max:50|unique:produtos,nome',
            'valor' => 'required',
            'estoque' => 'required'
        ];

        $request->validate($regras);
        
        $p = new Produto();
        $p->nome = $request->input('nome');
        $p->valor = $request->input('valor');
        $p->estoque = $request->input('estoque');

        
        if($p->save())
        {
            return redirect('/produto');
        }
        else{
            return view('produto.create');
        }
    }

    public function edit(int $id)
    {
        $produto = Produto::find($id);

        if(isset($produto))
            return view('produto.edit', compact(['produto']));
        else
            return redirect(route('produto.index'));
    }

    public function update(Request $request, int $id)
    {
        $produto = Produto::find($id);

        if(isset($produto))
        {
            $regras = [
                'nome' => 'required|min:3|max:50|unique:produtos,nome,'.$id,
                'valor' => 'required',
                'estoque' => 'required'
            ];
    
            $request->validate($regras);
            
            $produto->nome = $request->input('nome');
            $produto->valor = $request->input('valor');
            $produto->estoque = $request->input('estoque');

            $produto->save();
        }

        return redirect(route('produto.index'));
        
    }


    public function destroy(int $id)
    {
        $produto = Produto::find($id);

        if(isset($produto))
            $produto->delete();

        return redirect(route('produto.index'));
    }

    public function fotos(int $id)
    {
        $produto = Produto::find($id);

        if(isset($produto))
        {
            return view('produto.fotos', compact(['produto']));
        }

        return redirect(route('produto.index'));
    }
}
