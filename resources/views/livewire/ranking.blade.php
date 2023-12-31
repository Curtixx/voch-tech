<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ranking de colaboradores') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr class="divide-x">
                            <th scope="col" class="px-6 py-3">
                                Nome
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Cargo
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nota de desempenho
                            </th>
                            <th scope="col" class="px-6 py-3">
                                CPF
                            </th>
                            <th scope="col" class="px-6 py-3">
                                E-mail
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Unidade
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($colaboradores as $colaborador)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 divide-x">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $colaborador->colaborador->nome }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $colaborador->cargo->cargo }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $colaborador->nota_desempenho }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $colaborador->colaborador->cpf }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $colaborador->colaborador->email }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $colaborador->colaborador->unidade->nome_fantasia }}
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <div class="space-x-4 space-x-reverse m-10">
                    {{ $colaboradores->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
