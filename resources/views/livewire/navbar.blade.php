{{-- Navbar --}}
<nav x-data="{mobileMenu: false}"
    class="fixed top-0 w-full flex flex-col justify-center items-center z-50 h-4 py-7 lg:py-10">
    <div class="lg:container w-full flex justify-between items-center px-2 md:px-10 lg:px-0"
        x-bind:class="mobileMenu ? 'bg-white' : 'bg-[#ffffff00]'">
        <div class="w-full">
            <img src="{{asset('img/logo/va_logo.svg')}}" alt="Victory Arch Logo">
        </div>

        <div class="hidden lg:block w-full" x-data="{ solutionMenu: false }">
            <ul class="flex justify-center items-center gap-4">
                <li class="text-primary"><a href="#">HOME</a></li>

                <li class="text-primary"><a href="#">ABOUT</a></li>

                <li class="text-primary relative">
                    <button @click="solutionMenu = !solutionMenu" @click.away="solutionMenu = false">
                        SOLUTIONS
                    </button>

                    <ul x-show="solutionMenu" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                        class="absolute w-[250px] bg-white shadow-md rounded-lg">
                        <li class="w-full text-primary"><a href="#">Business Solutions</a></li>
                        <li class="w-full text-primary"><a href="#">Hardware Products</a></li>
                        <li class="w-full text-primary"><a href="#">Security</a></li>
                        <li class="w-full text-primary"><a href="#">Infrastructure</a></li>
                    </ul>
                </li>

                <li class="text-primary"><a href="#">SHOWROOM</a></li>

                <li class="text-primary"><a href="#">CONTACT</a></li>
            </ul>
        </div>

        <div class="w-full flex justify-end items-center gap-3 lg:gap-0">
            <a
                class="hidden lg:block bg-primary/90 hover:bg-primary focus:ring-1 focus:ring-secondary/50 rounded-lg px-4 py-2 border-0 text-white">
                Start Project
            </a>

            <button @click="mobileMenu = !mobileMenu" @click.away="mobileMenu = false"
                class="block lg:hidden w-7 h-7 aspect-square text-primary">
                {{ svg('css-menu') }}
            </button>
        </div>
    </div>

    <div class="relative lg:hidden w-full flex justify-between items-center">
        <template x-if="mobileMenu">
            <div x-show="mobileMenu" class="absolute w-full right-0 left-0 top-0 bg-white px-2 md:px-10 lg:px-0 py-5"
                x-data="{ mobileSolutionMenu: false }">
                <ul class="flex flex-col justify-start items-end gap-4">
                    <li class="text-primary"><a href="#">HOME</a></li>

                    <li class="text-primary"><a href="#">ABOUT</a></li>

                    <li class="text-primary relative">
                        <button @click="mobileSolutionMenu = !mobileSolutionMenu"
                            @click.away="mobileSolutionMenu = false">
                            SOLUTIONS
                        </button>

                        {{-- <ul x-show="mobileSolutionMenu" x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                            class="absolute w-[250px] bg-white shadow-md rounded-lg">
                            <li class="w-full text-primary"><a href="#">Business Solutions</a></li>
                            <li class="w-full text-primary"><a href="#">Hardware Products</a></li>
                            <li class="w-full text-primary"><a href="#">Security</a></li>
                            <li class="w-full text-primary"><a href="#">Infrastructure</a></li>
                        </ul> --}}
                    </li>

                    <li class="text-primary"><a href="#">SHOWROOM</a></li>

                    <li class="text-primary"><a href="#">CONTACT</a></li>

                    <a
                        class="bg-primary/90 hover:bg-primary focus:ring-1 focus:ring-secondary/50 rounded-lg px-4 py-2 border-0 text-white">
                        Start Project
                    </a>
                </ul>
            </div>
        </template>
    </div>
</nav>