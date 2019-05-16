<?php

namespace App\Http\Controllers;

use App\produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{    
    public function index()
    {
        return view('produto.index');
    }

    public function create()
    {
        return view('produto.create');
    }

    public function store(Request $request)
    {
        
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

    /**
     * Display the specified resource.
     *
     * @param  \App\produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(produto $produto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(produto $produto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, produto $produto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(produto $produto)
    {
        //
    }
}
