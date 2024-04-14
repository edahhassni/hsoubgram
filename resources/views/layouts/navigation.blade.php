<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>

                <!-- Navigation Links -->
                {{-- <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div> --}}
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
<<<<<<< HEAD
                @guest
                    <div class="hidden md:flex md:items-center md:space-x-2">
                        <div class="space-x-2 text[1.6rem] me-5 leading-5">
                            <a href="/login" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase ltr:tracking-widest me-2">{{__('Login')}}</a>
                            <a href="/register" class="inline-flex items-center px-4  py-2 font-semibold text-xs rounded-md text-dark uppercase ltr:tracking-widest">{{__('Register')}}</a>
                        </div>
                    </div>
                @endguest
=======
>>>>>>> 5365170645c1f86bb5fb86046685c546c0b97044
                @auth
                    <div class="flex items-center space-x-3">
                        <div class="spac-x-3 text-[1.6rem] mr-2 leading-5">
                            <a href="{{route('home')}}">
                                {!! url()->current() == route('home')
                                ? '<i class="bx bxs-home-alt-2"></i>'
                                : '<i class="bx bx-home-alt-2"></i>' !!}
                            </a>
                            <a href="{{route('explore')}}">
                                {!! url()->current() == route('explore') ? '<i class="bx bxs-compass"></i>' : '<i class="bx bx-compass"></i>' !!}
                            </a>
                            <a href="{{route('create_post')}}">
                                {!! url()->current() == route('create_post')
                                ? '<i class="bx bxs-message-square-add"></i>'
                                : '<i class="bx bx-message-square-add"></i>' !!}
                            </a>
<<<<<<< HEAD
                            <a href="{{route('create_post')}}">
                                {!! url()->current() == route('create_post')
                                ? '<i class="bx bxs-inbox"></i>'
                                : '<i class="bx bxs-inbox"></i>' !!}
                            </a>
                        </div>
                    </div>
                @endauth
                <div class="hidden md:block">
                    <x-dropdown align="right" width="48">
                        @auth
                        <x-slot name="trigger">
                            <div>
                                <img src="{{auth()->user()->image}}" class="w-6 h-6 rounded-full" alt="">
                            </div>
                        </x-slot>
                        @endauth

                        <x-slot name="content">
                            <x-dropdown-link :href="route('user_profile', auth()->user())">
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
=======
                        </div>
                    </div>
                @endauth
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <div>
                            <img src="{{auth()->user()->image}}" class="w-6 h-6 rounded-full" alt="">
                        </div>
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
>>>>>>> 5365170645c1f86bb5fb86046685c546c0b97044
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
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        {{-- <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('home') }}
            </x-responsive-nav-link>
        </div> --}}

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
<<<<<<< HEAD
            @guest
                <x-responsive-nav-link :href="route('login')">
                    {{ __('Login') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('register')">
                    {{ __('Register') }}
                </x-responsive-nav-link>
            @endguest
            @auth

=======
>>>>>>> 5365170645c1f86bb5fb86046685c546c0b97044
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>
<<<<<<< HEAD
            @endauth
=======
>>>>>>> 5365170645c1f86bb5fb86046685c546c0b97044

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
