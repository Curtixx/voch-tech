<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Adicionar desempenho') }}
        </h2>

    </x-slot>
    <div class="container-fluid">
        @if (session('msg'))
            <p class="text-lg bg-green-300 text-green-700 border-2 w-full mb-0 text-center p-2">{{ session('msg') }}</p>
        @endif
        @if (session('erro'))
            <p class="text-lg bg-red-300 text-red-700 border-2 w-full mb-0 text-center p-2">{{ session('erro') }}</p>
        @endif
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h2 class="m-8 text-3xl">Formulário de desempenho: </h2>
                <form method="POST" wire:submit.prevent="createAndUpdate" class="m-12">
                    <div class="mt-2">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="nome_fantasia"
                            for="colaborador">Colaborador: </label>
                        <select name="colaborador" id="colaborador" wire:model="colaborador"
                            class="block w-80 appearance-none bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                            <option value="">Selecione</option>
                            @foreach ($colaboradores as $colaborador)
                                <option value="{{ $colaborador->id }}">{{ $colaborador->nome }}</option>
                            @endforeach
                        </select>
                        @error('colaborador')
                            {{ $message }}
                        @enderror
                    </div>

                    <div class="mt-2">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="nome_fantasia"
                            for="colaborador">Nota desempenho: </label>
                        <input type="number" placeholder="Coloque uma nota para o colaborador..." min="0"
                            max="10" wire:model="nota_desempenho"
                            class="w-80 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>

                    <div class="mt-6">
                        <button
                            class="overflow-hidden relative w-32 p-2 h-12 bg-black text-white border-none rounded-md text-xl font-bold cursor-pointer relative z-10 group">
                            +
                            <span
                                class="absolute w-36 h-32 -top-8 -left-2 bg-green-200 rounded-full transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-500 duration-1000 origin-bottom"></span>
                            <span
                                class="absolute w-36 h-32 -top-8 -left-2 bg-green-400 rounded-full transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-700 duration-700 origin-bottom"></span>
                            <span
                                class="absolute w-36 h-32 -top-8 -left-2 bg-green-600 rounded-full transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-1000 duration-500 origin-bottom"></span>
                            <span
                                class="group-hover:opacity-100 group-hover:duration-1000 duration-100 opacity-0 absolute top-2.5 left-4 z-10">Adicionar!</span>
                        </button>


                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
