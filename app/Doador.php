<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doador extends Model
{
    public $timestamps = false;
    protected $table = 'doador';
    protected $fillable = [ 'id','nome', 'data_nascimento', 'tipo_sanguineo', 'email','telefone','endereco'];
}
