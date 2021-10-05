<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Endereco;

class EnderecoController extends Controller
{
    //mostra todos endereços de algum id
    public function show($id){
           
            $endereco = Endereco::find($id);
            
        if($endereco){
            echo "<p> o endereco é $endereco</p>";            
        }

        echo "<h1>pertençe a clinete</h1>";
        $cliente = $endereco->cliente()->first();

        if($cliente){
            echo $cliente->nome;
        }
    }

    public function create($id){
        return view('endereco.create',['cliente_id'=>$id]);
    }

    public function store(Request $request){
        $endereco = new endereco();
        $endereco->logradouro = $request->logradouro;
        $endereco->bairro = $request->bairro;
        $endereco->cidade = $request->cidade;
        $endereco->uf = $request->uf;
        $endereco->cliente_id = $request->cliente_id;
        $endereco->save();
        
        //redireciona para a rota de clinete com id = 5
        return redirect()->route('clienteshow',['id' => 5]);
    }


}
