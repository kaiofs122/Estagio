<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function carrinhoLista(){
        $itens = \Cart::getContent();
        return view('site.carrinho', compact('itens'));
    }

    public function adicionaCarrinho(Request $request){
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => abs($request->qnt),
            'attributes' => array(
                'image' => $request->img
            )
            
        ]);

        return redirect()->route('site.carrinho')->with('sucesso', 'produto adicionado no carrinho com sucesso!');
    }

    public function removeCarrinho(Request $request){
        \Cart::remove($request->id);
        return redirect()->route('site.carrinho')->with('sucesso', 'produto removido do carrinho com sucesso!');
    }

    public function atualizaCarrinho(Request $request){
        \Cart::update($request->id, [
            'quantity' => [
                'relative' => false,
                'value' => abs($request->quantity),
            ],
        ]);
        return redirect()->route('site.carrinho')->with('sucesso', 'produto atualizado do carrinho com sucesso!');
    }

    public function limparCarrinho(){
        \Cart::clear();
        return redirect()->route('site.carrinho')->with('Aviso', 'Seu carrinho está vazio!');
    }
}
