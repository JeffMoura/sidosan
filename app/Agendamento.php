<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    public $timestamps = false;
    protected $table = 'agendamentos';
    protected $fillable = [ 'id','data', 'horario', 'funcionario_id','doador_id'];


    public function doador()
    {
        # code...
        return $this->belongsTo('App\Doador');
    }

    public function funcionario()
    {
        # code...
        return $this->belongsTo('App\Funcionario');
    }

}
