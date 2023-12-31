<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">

                <img src="/imgs/logo.jpeg" class="rounded-lg h-12 mt-2" alt="voch tech">

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('unidade') }}" :active="request()->routeIs('unidade')">
                        {{ __('Unidade') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('colaborador') }}" :active="request()->routeIs('colaborador')">
                        {{ __('Colaborador') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('desempenho') }}" :active="request()->routeIs('desempenho')">
                        {{ __('Desempenho') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('ranking') }}" :active="request()->routeIs('ranking')">
                        {{ __('Ranking') }}
                    </x-nav-link>
                    <div class="hidden sm:flex sm:items-center sm:ms-6">
                        <div class="ms-3 relative">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <span class="inline-flex rounded-md">
                                        <button type="button"
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                            {{ 'Relatorios' }}

                                            <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>
                                        </button>
                                    </span>
                                </x-slot>

                                <x-slot name="content">
                                    <x-dropdown-link href="{{ route('relatorio-colaboradores') }}" :active="request()->routeIs('relatorio-colaboradores')">
                                        {{ __('Colaboradores') }}
                                    </x-dropdown-link>
                                    <x-dropdown-link href="{{ route('relatorio-unidades') }}" :active="request()->routeIs('relatorio-unidades')">
                                        {{ __('Unidades') }}
                                    </x-dropdown-link>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </div>

                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <div class="ms-3 relative">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <span class="inline-flex rounded-md">
                                <button type="button"
                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                    {{ Auth::user()->name }}

                                    <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </button>
                            </span>
                        </x-slot>

                        <x-slot name="content">
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>



    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('unidade') }}" :active="request()->routeIs('unidade')">
                {{ __('Unidade') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('colaborador') }}" :active="request()->routeIs('colaborador')">
                {{ __('Colaborador') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('desempenho') }}" :active="request()->routeIs('desempenho')">
                {{ __('Desempenho') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('ranking') }}" :active="request()->routeIs('ranking')">
                {{ __('Ranking') }}
            </x-responsive-nav-link>
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="flex items-center px-4">
                    <div>
                        <div class="font-medium text-base text-gray-800">{{ 'Relatorios' }}</div>
                    </div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link href="{{ route('relatorio-colaboradores') }}" :active="request()->routeIs('relatorio-colaboradores')">
                        {{ __('Colaboradores') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link href="{{ route('relatorio-unidades') }}" :active="request()->routeIs('relatorio-unidades')">
                        {{ __('Unidades') }}
                    </x-responsive-nav-link>
                </div>
            </div>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                <div>
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>

            </div>
        </div>
    </div>
</nav>
