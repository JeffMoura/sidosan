<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    public $timestamps = false;
    protected $table = 'funcionarios';
    protected $fillable = [ 'id','nome', 'data_admissao', 'telefone','email'];

    public function agendamento()
    {
        return $this->hasMany('App\Agendamento');
    }
}
