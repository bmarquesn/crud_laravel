<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/** Carregar Model Produto */
use App\Produto;

class ProdutosController extends Controller {
    public function create() {
		return view('produtos.create');
	}

	public function store(Request $request) {
		//dd($request->all());
		Produto::create([
			'nome' => $request->nome,
			'custo' => $request->custo,
			'preco' => $request->preco,
			'quantidade' => $request->quantidade
		]);

		return "Produto Criado com Sucesso!";
	}
}
