<?php

namespace App\Http\Livewire;

use App\Models\CargoColaborador;
use Livewire\Component;
use Livewire\WithPagination;

class Ranking extends Component
{
    use WithPagination;

    public function render()
    {
        $colaboradores = CargoColaborador::orderBy('nota_desempenho', 'DESC')->paginate(15);
        return view('livewire.ranking', ['colaboradores' => $colaboradores]);
    }
}
