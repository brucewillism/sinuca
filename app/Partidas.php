<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partidas extends Model
{
    protected $fillable = ['id', 'aposta', 'data_da_partida', 'premissas', 'aposta'];
}
    