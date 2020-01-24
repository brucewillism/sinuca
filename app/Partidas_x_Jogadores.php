<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partidas_x_Jogadores extends Model
{
    protected $fillable = ['id', 'id_jogador', 'id_partida'];
}
