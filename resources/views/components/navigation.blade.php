<nav x-data="{ open: false }" class=" bg-gray-200 border-b border-gray-100 shadow-md {{ request()->routeIs('cardapio') ? 'fixed top-0 w-full z-50' : '' }}">

    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ">
        <div class="flex justify-between">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <x-application-logo class="block h-9 w-auto fill-auto text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-7 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('comprar')" :active="request()->routeIs('comprar')">
                        {{ __('Comprar') }}
                    </x-nav-link>
                    <x-nav-link :href="route('alugar')" :active="request()->routeIs('alugar')">
                        {{ __('Alugar') }}
                    </x-nav-link>

                    <x-nav-link :href="route('contato')" :active="request()->routeIs('contato')">
                        {{ __('Contato') }}
                    </x-nav-link>
                    <x-nav-link :href="route('quem-somos')" :active="request()->routeIs('quem-somos')">
                        {{ __('Quem Somos') }}
                    </x-nav-link>
                    <x-nav-link :href="route('anunciar')" :active="request()->routeIs('anunciar')">
                        {{ __('Anuncie seu Imóvel') }}
                    </x-nav-link>
                </div>
            </div>

        </div>
        <!-- Hamburger -->
        <div class="-mr-2 flex items-center sm:hidden">
            <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('quem-somos')" :active="request()->routeIs('quem-somos')">
                {{ __('Serviços') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('contato')" :active="request()->routeIs('contato')">
                {{ __('Contato') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('comprar')" :active="request()->routeIs('comprar')">
                {{ __('Comprar') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('alugar')" :active="request()->routeIs('alugar')">
                {{ __('Alugar') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('anunciar')" :active="request()->routeIs('anunciar')">
                {{ __('Anuncie seu Imóvel') }}
            </x-responsive-nav-link>
        </div>
    </div>

</nav>