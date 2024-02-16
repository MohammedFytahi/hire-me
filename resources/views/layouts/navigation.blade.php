<nav>
    <div class="bg-gray-100" style="min-height: 192px;">

        <header x-data="{ open: false }" class="bg-slate-900
        ">
            <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:divide-y lg:divide-gray-700 lg:px-8">
                <div class="relative h-16 flex justify-between">
                    <div class="relative z-10 px-2 flex lg:px-0">
                        <div class="flex-shrink-0 flex items-center">
                            <img class="block h-8 w-auto"
                                src="data:image/png;base64,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"
                                alt="Workflow">
                        </div>
                    </div>
                    <div class="relative z-0 flex-1 px-2 flex items-center justify-center sm:absolute sm:inset-0">
                        <div class="w-full sm:max-w-xs">
                            <label for="search" class="sr-only">Search</label>
                            <div class="relative">
                                <div class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
                                    <svg class="h-5 w-5 text-gray-400" x-description="Heroicon name: solid/search"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input id="search" name="search"
                                    class="block w-full bg-gray-700 border border-transparent rounded-md py-2 pl-10 pr-3 text-sm placeholder-gray-400 focus:outline-none focus:bg-white focus:border-white focus:ring-white focus:text-gray-900 focus:placeholder-gray-500 sm:text-sm"
                                    placeholder="Search" type="search">
                            </div>
                        </div>
                    </div>
                    <div class="relative z-10 flex items-center lg:hidden">
                        <!-- Mobile menu button -->
                        <button type="button"
                            class="rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                            aria-controls="mobile-menu" @click="open = !open" aria-expanded="false"
                            x-bind:aria-expanded="open.toString()">
                            <span class="sr-only">Open menu</span>
                            <svg x-description="Icon when menu is closed.

Heroicon name: outline/menu"
                                x-state:on="Menu open" x-state:off="Menu closed" class="block h-6 w-6"
                                :class="{ 'hidden': open, 'block': !(open) }" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                            <svg x-description="Icon when menu is open.

Heroicon name: outline/x"
                                x-state:on="Menu open" x-state:off="Menu closed" class="hidden h-6 w-6"
                                :class="{ 'block': open, 'hidden': !(open) }" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="hidden lg:relative lg:z-10 lg:ml-4 lg:flex lg:items-center">


                        <!-- Profile dropdown -->

                        <div class="hidden sm:flex sm:items-center sm:ms-6">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-green dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                        <div>{{ Auth::user()->name }}</div>

                                        <div class="ms-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <x-dropdown-link :href="route('profile.edit')">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>


                    </div>
                </div>
                <nav class="hidden lg:py-2 lg:flex lg:space-x-8" aria-label="Global">
                    <div class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md py-2 px-3 inline-flex items-center text-sm font-medium">
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                    </div>

                    <a href="{{ route('show.company') }}"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md py-2 px-3 inline-flex items-center text-sm font-medium"
                        x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                        Companais
                    </a>
                    <a href="{{ route('offres') }}"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md py-2 px-3 inline-flex items-center text-sm font-medium""
                        aria-current="page" x-state:on="Current" x-state:off="Default"
                        x-state-description="Current: &quot;bg-gray-900 text-white&quot;, Default: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                        {{ Auth()->user()->role === 'user' ? 'offres' : 'Your offres' }}
                    </a>
                    @if (Auth()->user()->role === 'user')
                        <a href="{{ route('formCv') }}"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md py-2 px-3 inline-flex items-center text-sm font-medium"
                            x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                            Cv
                        </a>
                    @endif
                    @if (Auth()->user()->role === 'entreprise')
                        <a href="{{ route('formoffre') }}"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md py-2 px-3 inline-flex items-center text-sm font-medium"
                            x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                            Post an offre
                        </a>
                    @endif
                   

                </nav>
            </div>

            <nav x-description="Mobile menu, show/hide based on menu state." class="lg:hidden" aria-label="Global"
                id="mobile-menu" x-show="open">
                <div class="pt-2 pb-3 px-2 space-y-1">

                    <a href="{{ route('show.company') }}"
                        class="bg-gray-900 text-white block rounded-md py-2 px-3 text-base font-medium"
                        aria-current="page" x-state:on="Current" x-state:off="Default"
                        x-state-description="Current: &quot;bg-gray-900 text-white&quot;, Default: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">Entreprise</a>
                    <a href="" class="bg-gray-900 text-white block rounded-md py-2 px-3 text-base font-medium"
                        aria-current="page" x-state:on="Current" x-state:off="Default"
                        x-state-description="Current: &quot;bg-gray-900 text-white&quot;, Default: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">Your
                        offres</a>

                    <a href="{{ route('formCv') }}"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md py-2 px-3 text-base font-medium"
                        x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">Cv</a>

                    <a href="{{ route('formoffre') }}"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md py-2 px-3 text-base font-medium"
                        x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">Post
                        an offre</a>
                    @if (!(Auth()->user()->role === 'entreprise'))
                        <a href="{{ route('formcompany') }}"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md py-2 px-3 text-base font-medium"
                            x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">For
                            Company</a>
                    @endif

                </div>
                <div class="border-t border-gray-700 pt-4 pb-3">
                    <div class="px-4 flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                alt="">
                        </div>
                        <div class="ml-3">
                            <div class="text-base font-medium text-white">Tom Cook</div>
                            <div class="text-sm font-medium text-gray-400">tom@example.com</div>
                        </div>
                        <button type="button"
                            class="ml-auto flex-shrink-0 bg-gray-800 rounded-full p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                            <span class="sr-only">View notifications</span>
                            <svg class="h-6 w-6" x-description="Heroicon name: outline/bell"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                                </path>
                            </svg>
                        </button>
                    </div>
                    <div class="mt-3 px-2 space-y-1">

                        <a href="{{ route('profile.edit') }}"
                            class="block rounded-md py-2 px-3 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Your
                            Profile</a>

                        <a href="#"
                            class="block rounded-md py-2 px-3 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Settings</a>

                        <a href="#"
                            class="block rounded-md py-2 px-3 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Sign
                            out</a>

                    </div>
                </div>
            </nav>
        </header>

    </div>

</nav>
