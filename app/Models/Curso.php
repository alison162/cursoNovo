<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = ['nome', 'cargaHoraria', 'status'];

    public function matricula(){
        return $this->hasMany(Matricula::class);
    }

}
