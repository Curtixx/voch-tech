<?php

namespace App\Http\Livewire;

use App\Models\Cargo;
use App\Models\CargoColaborador;
use App\Models\Colaborador;
use App\Models\Unidade;
use Livewire\Component;

class Createcolaborador extends Component
{
    public $nome;
    public $email;
    public $cpf;
    public $cargo;
    public $unidade;

    protected $rules = [
        'nome' => 'required|max:100|min:3|string',
        'email' => 'required|max:50|min:5|string',
        'cpf' => 'required|max:11|cpf',
        'cargo' => 'required',
        'unidade' => 'required'
    ];

    public function render()
    {
        try {
            $cargos = Cargo::orderBy('cargo')->get();
            $unidades = Unidade::orderBy('nome_fantasia')->get();
            return view('livewire.createcolaborador', ['cargos' => $cargos, 'unidades' => $unidades]);
        } catch (\Exception $e) {
            return redirect('/')->with('erro', 'Ocorreu algum problema, tente novamente!!!!');
        }
    }

    public function create()
    {
        $this->validate();
        try {

            $cpf = preg_replace("/\D/", '', $this->cpf);
            $this->cpf = preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/", "\$1.\$2.\$3-\$4", $cpf);

            $validation = Colaborador::where('email', $this->email)->orWhere('cpf', $this->cpf)->first();

            if ($validation) {
                return redirect('/colaborador')->with('erro', 'Já existe um colaborador com esse email e/ou CPF!!');
            }

            $colaborador = Colaborador::create([
                'nome' => $this->nome,
                'email' => $this->email,
                'cpf' => $this->cpf,
                'unidade_id' => $this->unidade
            ]);


            CargoColaborador::create([
                'cargo_id' => $this->cargo,
                'colaborador_id' => $colaborador->id,
                'nota_desempenho' => 0,
            ]);

            return redirect('/colaborador')->with('msg', 'Colaborador criado com sucesso!!');
        } catch (\Exception $e) {
            return redirect('/colaborador')->with('erro', 'Ocorreu algum problema, tente novamente!!');
        }
    }
}
