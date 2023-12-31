<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'cargo',
    ];

    public function cargosColaboradores() {
        return $this->hasMany(CargoColaborador::class);
    }
}
