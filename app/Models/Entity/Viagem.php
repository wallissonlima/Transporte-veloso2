<?php

namespace App\Models\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viagem extends Model
{
    protected $filable = ['idViagem', 'dataInicio', 'dataFim', 'quilometragemInicial', 'quilometragemFinal', 'idItinerario', 'idVeiculo'];

    protected $hidden = ['password', 'remmembeer_token','updated_at','created_at'];

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $table = 'Viagem';
}
