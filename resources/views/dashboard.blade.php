<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div>
                    <h1 class="m-12 text-7xl">Seja bem-vindo.</h1>
                    <p class="text-lg ml-12 mr-12">Sistema altamente eficiente projetado para gerenciar o cadastro de unidades e colaboradores, bem como avaliar o desempenho de colaboradores.</p>
                    <p class="text-lg ml-12 mb-8 mr-12">Além disso, oferece uma funcionalidade de ranking que classifica os colaboradores com base em suas notas de desempenho, além de fornecer relatórios detalhados tanto para colaboradores quanto para unidades.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
