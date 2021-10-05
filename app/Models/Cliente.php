<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    //nome da tabela
    protected $table= "clientes";

    
    //colocar campos que serao setados no bd
    protected $fillable = [
        'nome',
        'debito',
        'descricao'
    ];

    function endereco(){
        return $this->hasMany(Endereco::class, 'cliente_id', 'id');
    }
}
