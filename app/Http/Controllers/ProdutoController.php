<?php

namespace App\Http\Controllers;
use App\Models\Produto;


use Illuminate\Http\Request;

class ProdutoController extends Controller
{

    public function index()
    {
        $produtos = Produto::all(); // Obtém todos os produtos do banco de dados
        return view('produtos.index', compact('produtos')); // Passa os produtos para a view
    }
    

    public function create(){
        return view('produtos.create');
    }

    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.show', ['produto' => $produto]);
    }
    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.edit', ['produto' => $produto]);
    }
    public function update(Request $request,$id)
    {
        $produto = Produto::findOrFail($id);
        $produto -> update([
            'nome' => $request->nome,
            'custo' => $request->custo,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade
        ]);
        return redirect()->route('produtos.index')->with('success', 'Produto atualizado com sucesso!');
    }

    public function delete($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.delete', ['produto' => $produto]);
    }
     

    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();
    
        // Redirecionar após a exclusão com uma mensagem de sucesso
        return redirect()->route('produtos.index')->with('success', 'Produto excluído com sucesso!');
    }
    
    public function store(Request $request)
    {
        // Validação dos dados do produto
        $request->validate([
            'nome' => 'required|string|max:255',
            'custo' => 'required|numeric',
            'preco' => 'required|numeric',
            'quantidade' => 'required|integer',
        ]);
    
        // Criação do novo produto
        $produto = Produto::create([
            'nome' => $request->nome,
            'custo' => $request->custo,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade,
        ]);
    
        // Redirecionar para a página do produto recém-criado, com uma mensagem de sucesso
        return redirect()->route('produtos.show', ['id' => $produto->id])->with('success', 'Produto cadastrado com sucesso!');

        
    }
    

}
