<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosControler extends Controller
{

    public function criar(Request $request){
        $produto = new Produto;
        $produto->name = $request->name;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;

        $produto->save();
        return redirect("/listar_produtos");
    }

    public function listar(){
        $produtos = Produto::all();

        return view("produts",["produts"=>$produtos]);
    }


    public function Produtos(){
        return view("prod");        
    }
}
