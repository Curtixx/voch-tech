<?php

namespace App\Http\Livewire;

use App\Models\Colaborador;
use App\Models\Unidade;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class RelatorioTotalColaboradores extends Component
{

    use WithPagination;

    public function render()
    {

        $colaboradores = Colaborador::selectRaw('COUNT(nome) as total, unidade_id')->groupBy('unidade_id')->paginate(15);
        $totalColaboradores = Colaborador::count('id');
        return view('livewire.relatorio-total-colaboradores', ['colaboradores' => $colaboradores, 'totalColaboradores' => $totalColaboradores]);
    }
}
