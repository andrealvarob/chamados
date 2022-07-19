<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chamado extends Model
{
   protected $fillable = [
    'id','titulo', 'solicitacao', 'data', 'status', 'prioridade', 'solicitante', 'setor'
];
  
   public $timestamps = false;
}