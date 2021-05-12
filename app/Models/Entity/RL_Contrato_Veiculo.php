<?php

namespace App\Models\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RL_Contrato_Veiculo extends Model
{
    protected $filable = ['idContratoVeiculo', 'idContrato', 'idVeiculo'];

    protected $hidden = ['password', 'remmembeer_token','updated_at','created_at'];

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $table = 'RL_Contrato_Veiculo';
}
