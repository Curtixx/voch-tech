<?php

namespace App\Http\Livewire;

use App\Models\Unidade;
use Livewire\Component;

class Createunidade extends Component
{
    public $nome_fantasia;
    public $razao_social;
    public $cnpj;

    protected $rules = [
        'nome_fantasia' => 'required|max:100|min:5|string',
        'razao_social' => 'required|max:50|min:5|string',
        'cnpj' => 'required|max:14|cnpj'
    ];

    public function render()
    {
        try {
            $unidades = Unidade::orderBy('nome_fantasia')->get();

            return view('livewire.createunidade', ['unidades' => $unidades]);
        } catch (\Exception $e) {
            return redirect('/')->with('erro', 'Ocorreu algum problema, tente novamente!!!!');
        }

    }

    public function create(){
        try {
            $this->validate();

            $cnpj = preg_replace("/\D/", '', $this->cnpj);
            $this->cnpj = preg_replace("/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/", "\$1.\$2.\$3/\$4-\$5", $cnpj);

            $validation = Unidade::where('nome_fantasia', $this->nome_fantasia)->orWhere('razao_social', $this->razao_social)->orWhere('cnpj', $this->cnpj)->first();

            if($validation) {
                return redirect('/unidade')->with('erro', 'Já existe uma unidade com esses valores!!');
            }

            Unidade::create([
                'nome_fantasia' => $this->nome_fantasia,
                'razao_social' => $this->razao_social,
                'cnpj' => $this->cnpj,
            ]);

            $this->nome_fantasia = '';
            $this->razao_social = '';
            $this->cnpj = '';

            return redirect('/unidade')->with('msg', 'Unidade criada com sucesso!!');
        } catch (\Exception $e) {
            return redirect('/unidade')->with('erro', 'Ocorreu algum problema, tente novamente!!');
        }

    }
}
