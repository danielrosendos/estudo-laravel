<?php 

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Support\Facades\DB;
use Request;

class ProdutoController extends Controller {
 
    public function lista(){

        $produtos = DB::select('select * from produtos');

        return view('produto.listagem')->with('produtos', $produtos);


    }

    public function mostrar($id){

        $resposta = DB::select('select * from produtos where id = ?', [$id]);

        if(empty($resposta)){
            return "Esse Produto não existe";
        }

        return view('produto.detalhes')->with('p', $resposta[0]);
    }
    
}