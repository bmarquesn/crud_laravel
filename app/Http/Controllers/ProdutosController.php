<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/** Query Builder */
use Illuminate\Support\Facades\DB;
/** Carregar Model Produto */
use App\Produto;

class ProdutosController extends Controller {
    public function list($message = null) {
        $produtos = DB::table('produtos')->get();

        if(isset($_GET['message']) && !empty($_GET['message'])) {
            $message = $_GET['message'];
        }

		return view('crud_laravel', [
            'page' => 'produtos.list'
            ,'produtos' => $produtos
            ,'message' => $message
        ]);
    }

    public function create() {
		return view('crud_laravel', [
            'page' => 'produtos.create'
        ]);
	}

	public function store(Request $request) {
		//dd($request->all());
		Produto::create([
			'nome' => $request->nome,
			'custo' => $request->custo,
			'preco' => $request->preco,
			'quantidade' => $request->quantidade
		]);

		return redirect('produtos/listar?message=Produto Criado com Sucesso!');
	}

	public function show($id) {
        $produto = Produto::findOrFail($id);

        return view('crud_laravel', [
            'page' => 'produtos.show'
            ,'produto' => $produto
        ]);
	}

	public function edit($id) {
		$produto = Produto::findOrFail($id);

        return view('crud_laravel', [
            'page' => 'produtos.edit'
            ,'produto' => $produto
        ]);
	}

	public function update(Request $request, $id) {
		$produto = Produto::findOrFail($id);

		$produto->update([
			'nome' => $request->nome,
			'custo' => $request->custo,
			'preco' => $request->preco,
			'quantidade' => $request->quantidade
        ]);

        return redirect('produtos/listar?message=Produto Atualizado com Sucesso!');
	}

	public function delete($id) {
        $produto = Produto::findOrFail($id);

        return view('crud_laravel', [
            'page' => 'produtos.delete'
            ,'produto' => $produto
        ]);
	}

	public function destroy($id) {
		$produto = Produto::findOrFail($id);
        $produto->delete();

        return redirect('produtos/listar?message=Produto Excluído com Sucesso!');
	}
}
