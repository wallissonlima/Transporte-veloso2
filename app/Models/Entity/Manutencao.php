<?php

namespace App\Models\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manutencao extends Model
{
    protected $filable = ['idManutecao', 'idVeiculo', 'dataManutencao', 'valorManutencao', 'descricao', 'idTipoManutencao', 'idPeca', 'idMaoDeObra'];

    protected $hidden = ['password', 'remmembeer_token','updated_at','created_at'];

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $table = 'Manutencao';
}
