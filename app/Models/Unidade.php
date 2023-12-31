<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    protected $fillable = [
        'id',
        'nome_fantasia',
        'razao_social',
        'cnpj',

    ];
    use HasFactory;

    public function colaboradores(){
        return $this->hasMany(Colaborador::class);
    }
}
