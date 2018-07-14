<?php 

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Support\Facades\DB;
use Request;
use App\Http\Requests\ProdutosRequest;
use Illuminate\Support\Facades\Validator;

class ProdutoController extends Controller {

    public function __construct(){
        $this->middleware('auth');
    }
 
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

    public function novo($id){
        
        $produto = Produto::find($id);

        if(empty($produto)){
            return view('produto.formulario')->with('p', $produto);
        }
    
        return view('produto.formulario')->with('p', $produto);
    }

    public function adiciona(ProdutosRequest $request, $id){

        if($id==0){
            Produto::create($request->all());
        }
        else{
            Produto::find($id)->update(Request::except($id));
        }
    
        return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));
    }

    public function listaJson(){

        $produtos = Produto::all();
        return response()->json($produtos);

    }

    public function remove($id){

        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->action('ProdutoController@lista');

    }
    
}