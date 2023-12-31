<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Relatorio de unidades') }}
        </h2>
    </x-slot>

    <div class="container-fluid">
        <div class="row">
            @if (session('msg'))
                <p class="border-2 w-max text-center p-10 mb-0">{{ session('msg') }}</p>
            @endif
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr class="divide-x">
                            <th scope="col" class="px-6 py-3">Nome fantasia</th>
                            <th scope="col" class="px-6 py-3">Razão social</th>
                            <th scope="col" class="px-6 py-3">CNPJ</th>
                            <th scope="col" class="px-6 py-3">Total de colaboradores</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($colaboradores as $colaborador)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 divide-x">
                                <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $colaborador->unidade->nome_fantasia }}</th>
                                <td class="px-6 py-4">{{ $colaborador->unidade->razao_social }}</td>
                                <td class="px-6 py-4">{{ $colaborador->unidade->cnpj }}</td>
                                <td class="px-6 py-4">{{ $colaborador->total }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <div class="m-4 ">
                    <p class="text-xl">Total de colaboradores: {{ $totalColaboradores }}</p>
                </div>
                <div class="space-x-4 space-x-reverse m-10">

                    {{ $colaboradores->links() }}
                </div>

            </div>
        </div>
    </div>
</div>
