<?php

namespace App\Http\Livewire;

use App\Models\CargoColaborador;
use App\Models\Colaborador;
use Livewire\Component;

class Desempenhocolaborador extends Component
{
    public $colaborador;
    public $nota_desempenho;

    protected $rules = [
        'colaborador' => 'required',
        'nota_desempenho' => 'required|max:10|min:0',
    ];

    public function render()
    {
        $colaboradores = Colaborador::orderBy('nome')->get();
        return view('livewire.desempenhocolaborador', ['colaboradores' => $colaboradores]);
    }

    public function createAndUpdate()
    {
        try {
            $this->validate();
            CargoColaborador::where('colaborador_id', $this->colaborador)->update(['nota_desempenho' => $this->nota_desempenho]);
            return redirect('/desempenho')->with('msg', 'Colaborador atualizado!!');
        } catch (\Exception $e) {
            return redirect('/desempenho')->with('erro', 'Ocorreu algum problema, tente novamente!!!!');
        }
    }
}
