<header class="z-10 py-4 bg-[#331B3F] shadow-md">
    <div class="container flex justify-between items-center px-6 mx-auto h-full text-[#ACC7B4] md:justify-end">
        <!-- Mobile hamburger -->
        <button
            class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
            @click="toggleSideMenu"
            aria-label="Menu"
        >
            <svg
                class="w-6 h-6"
                aria-hidden="true"
                fill="currentColor"
                viewBox="0 0 20 20"
            >
                <path
                    fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"
                ></path>
            </svg>
        </button>

        <!-- Profile Dropdown -->
        <x-dropdown>
            <x-slot name="trigger">
                <button
                    class="flex items-center space-x-2 bg-[#5CC8D7] text-[#331B3F] py-2 px-4 rounded-lg hover:bg-teal-600 hover:text-white transition duration-200 focus:outline-none"
                    @click="toggleProfileMenu"
                    @keydown.escape="closeProfileMenu"
                    aria-label="Account"
                    aria-haspopup="true"
                >
                    <span class="font-semibold text-lg">{{ Auth::user()->name }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
            </x-slot>

            <x-slot name="content">
                <x-dropdown-link href="{{ route('profile.show') }}">
                    <x-slot name="icon">
                        <svg class="mr-3 w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                             stroke-linejoin="round"
                             stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </x-slot>
                    My profile
                </x-dropdown-link>
                <form method="POST" action="{{ route('logout') }} ">
                    @csrf
                    <x-dropdown-link :href="route('logout')"
                                     onclick="event.preventDefault(); this.closest('form').submit();">
                        <x-slot name="icon">
                            <svg class="mr-3 w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                 stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                            </svg>
                        </x-slot>
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </x-slot>
        </x-dropdown>

    </div>
</header>
