<?php

namespace App\Models\Entity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TD_Tipo_Veiculo extends Model
{
    protected $filable = ['idTipoVeiculo', 'descricao'];

    protected $hidden = ['password', 'remmembeer_token','updated_at','created_at'];

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $table = 'TD_Tipo_Veiculo';
}
