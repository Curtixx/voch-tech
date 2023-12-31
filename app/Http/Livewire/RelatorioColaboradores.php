<?php

namespace App\Http\Livewire;

use App\Models\Cargo;
use App\Models\CargoColaborador;
use App\Models\Colaborador;
use Livewire\Component;
use Livewire\WithPagination;

class RelatorioColaboradores extends Component
{
    use WithPagination;

    public function render()
    {
        $colaboradores = CargoColaborador::orderBy('id', 'ASC')->paginate(15);

        return view('livewire.relatorio-colaboradores', ['colaboradores' => $colaboradores,]);
    }
}
