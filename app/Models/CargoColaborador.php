<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CargoColaborador extends Model
{
    use HasFactory;

    protected $fillable = [
        'cargo_id',
        'nota_desempenho',
        'colaborador_id',
    ];

    public function colaborador() {
        return $this->belongsTo(Colaborador::class);
    }

    public function cargo() {
        return $this->belongsTo(Cargo::class);
    }

}
