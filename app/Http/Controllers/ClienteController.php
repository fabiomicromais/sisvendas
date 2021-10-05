<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    //
    public function index(){
        $clientes = Cliente::all();
        //foreach($clientes as $cliente){
         //   echo "<p> Nome do {{$cliente}} </p>";}           
        //echo "<p> {{$clientes}} </p>"; 
         return view('clientes.index',['clientes'=>$clientes]);  //passa objeto ->
    }


   public function show($id){
     if($id){
         $cliente = Cliente::where('id',$id)->get();
     }else{      
        $cliente = Cliente::all();
     }
     return view('clientes.show',['clientes'=>$cliente]);  //passa objeto ->
    }
 
    public function create(){
        return view('clientes.create');
    }


    public function store(Request $request){
        $cliente = new Cliente();
        $cliente->nome = $request->nome;
        $cliente->debito = $request->debito;
        $cliente->descricao = $request->descricao;
        $cliente->save();
        return redirect()->route('enderecocreate',['id' => $cliente->id]);
        //return redirect()->route('clienteshow',['id' => 5]);
    }


    public function edit($id){
        $cliente = Cliente::find($id);
        return view('clientes.edit',['cliente'=>$cliente]);
    }


    public function update(Request $request){
        Cliente::find($request->id)->update($request->except('_method'));
        return redirect('clientes/index')->with('msg', 'Cadastro realdizado com sucesso');
        
    }

    public function destroy($id){
        echo $id;
        Cliente::findOrFail($id)->delete();
        return redirect('clientes/index')->with('msg', 'Cliente apagado');
    }

    public function showendereco(){
        $clientes = Cliente::all();
        
            foreach($clientes as $cliente){
                echo "<p> Cliente: $cliente->nome </p> ";
                echo "<p> descricao: $cliente->descricao </p>";

                $enderecos = $cliente->endereco()->get();

                if(count($enderecos)>0){
                      echo "<h1>Endereço</h1>";
                      foreach($enderecos as $endereco){
                         echo "<p>[$endereco->id , $endereco->logradouro]</p>";
                }
                
            }
            echo"<br>";
        }

    }


}