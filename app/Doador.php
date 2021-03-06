<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doador extends Model
{
    public $timestamps = false;
    protected $table = 'doadores';
    protected $fillable = [ 'id','nome', 'data_nascimento', 'tipo_sanguineo', 'email','telefone','endereco'];

    public function agendamento()
    {
        return $this->hasMany('App\Agendamento');
    }

}
