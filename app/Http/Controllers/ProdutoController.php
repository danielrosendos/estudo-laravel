<?php 

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Support\Facades\DB;
use Request;

class ProdutoController extends Controller {
 
    public function lista(){

        $produtos = Produto::all();

        return view('produto.listagem')->with('produtos', $produtos);


    }

    public function mostrar($id){

        $resposta = Produto::find($id);

        if(empty($resposta)){
            return "Esse Produto não existe";
        }

        return view('produto.detalhes')->with('p', $resposta);
    }

    public function novo(){
        return view('produto.formulario');
    }

    public function adiciona(){
        
        Produto::create(Request::all());

        return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));
    }

    public function listaJson(){

        $produtos = Produto::all();
        return response()->json($produtos);

    }
    
}