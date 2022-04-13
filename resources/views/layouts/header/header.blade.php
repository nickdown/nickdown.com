<div class="min-h-full">
    <nav
        x-data="{'navOpen': false}"
        class="bg-indigo-600"
    >
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 text-gray-200 text-xl font-bold">
                        Nick Down
                    </div>
                    @include('layouts.header.navigation-desktop')
                </div>
                @auth
                    @include('layouts.header.auth-desktop')
                @endauth
                <div class="-mr-2 flex md:hidden">
                    <button
                        @click="navOpen = !navOpen"
                        type="button"
                        class="bg-indigo-600 inline-flex items-center justify-center p-2 rounded-md text-indigo-200 hover:text-white hover:bg-indigo-500 hover:bg-opacity-75 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-600 focus:ring-white"
                        aria-controls="mobile-menu"
                        aria-expanded="false"
                    >
                        <span class="sr-only">Open main menu</span>
                        <svg
                            :class="{'hidden': navOpen, 'block': !navOpen}"
                            class="h-6 w-6"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            aria-hidden="true"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        <svg
                            :class="{'block': navOpen, 'hidden': !navOpen}"
                            class="hidden h-6 w-6"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div
            x-show="navOpen"
            class="md:hidden" id="mobile-menu"
        >
            @include('layouts.header.navigation-mobile')
            @auth
                <div class="pt-4 pb-3 border-t border-indigo-700">
                    <div class="flex items-center px-5">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full"
                                 src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                 alt="">
                        </div>
                        <div class="ml-3">
                            <div class="text-base font-medium text-white">Tom Cook</div>
                            <div class="text-sm font-medium text-indigo-300">tom@example.com</div>
                        </div>
                </div>
                <div class="mt-3 px-2 space-y-1">
                    <a href="#"
                       class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-indigo-500 hover:bg-opacity-75">Your
                        Profile</a>

                    <a href="#"
                       class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-indigo-500 hover:bg-opacity-75">Settings</a>

                    <a href="#"
                       class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-indigo-500 hover:bg-opacity-75">Sign
                        out</a>
                </div>
            </div>
            @endauth
        </div>
    </nav>
</div>
