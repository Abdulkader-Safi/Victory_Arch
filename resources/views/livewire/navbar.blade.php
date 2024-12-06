{{-- Navbar --}}
<nav x-data="{solutionMenu: false, mobileMenu: false, mobileSolutionMenu: false}"
    class="fixed top-0 w-full flex flex-col justify-center items-center z-50 h-4 py-7 lg:py-10">
    <div class="lg:container w-full flex justify-between items-center px-2 md:px-10 lg:px-0"
        x-bind:class="mobileMenu ? 'bg-white' : 'bg-[#ffffff00]'">
        <div class="w-full">
            <img src="{{asset('img/logo/va_logo.svg')}}" alt="Victory Arch Logo">
        </div>

        <div class="hidden lg:block w-full">
            <ul class="flex justify-center items-center gap-6">
                <li class="text-primary"><a href="#">HOME</a></li>

                <li class="text-primary"><a href="#">ABOUT</a></li>

                <li class="text-primary relative">
                    <button @click="solutionMenu = !solutionMenu" @click.away="solutionMenu = false"
                        class="flex justify-center items-center gap-2">
                        <span>SOLUTIONS</span>

                        <template x-if="!solutionMenu">
                            <span class="w-7 h-7 aspect-square">@svg('ri-arrow-down-s-fill')</span>
                        </template>

                        <template x-if="solutionMenu">
                            <span class="w-7 h-7 aspect-square">@svg('ri-arrow-up-s-fill')</span>
                        </template>
                    </button>

                    <ul x-cloak x-show="solutionMenu" x-transition:enter="transition ease-out duration-200"
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

            <button @click="mobileMenu = !mobileMenu" class="block lg:hidden w-7 h-7 aspect-square text-primary">
                {{ svg('css-menu') }}
            </button>
        </div>
    </div>

    <div class="relative lg:hidden w-full flex justify-between items-center">
        <div class="absolute w-full right-0 left-0 top-0 px-2 md:px-10 lg:px-0 py-5"
            x-bind:class="mobileMenu ? 'bg-white' : 'bg-[#ffffff00]'">
            <ul x-cloak x-show="mobileMenu" class="w-full flex flex-col justify-end items-end gap-4"
                x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">
                <li class="w-full text-primary float-end">
                    <a href="#" class="float-end">
                        HOME
                    </a>
                </li>

                <li class="w-full text-primary float-end">
                    <a href="#" class="float-end">
                        ABOUT
                    </a>
                </li>

                <li class="w-full text-primary float-end flex flex-col">
                    <button @click="mobileSolutionMenu = !mobileSolutionMenu" @click.away="mobileSolutionMenu = false"
                        class="flex justify-end items-center gap-2 float-end">
                        <template x-if="!mobileSolutionMenu">
                            <span class="w-6 h-6 aspect-square">@svg('ri-arrow-down-s-fill')</span>
                        </template>

                        <template x-if="mobileSolutionMenu">
                            <span class="w-6 h-6 aspect-square">@svg('ri-arrow-up-s-fill')</span>
                        </template>

                        <span>SOLUTIONS</span>
                    </button>

                    <ul x-cloak x-show="mobileSolutionMenu" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                        class="w-full bg-white flex flex-col px-6 gap-3 pt-3">
                        <li class="w-full text-primary" @click="mobileSolutionMenu = false; mobileMenu = false">
                            <a href="#" class="float-end">
                                Business Solutions -
                            </a>
                        </li>

                        <li class="w-full text-primary">
                            <a href="#" class="float-end">
                                Hardware Products -
                            </a>
                        </li>

                        <li class="w-full text-primary">
                            <a href="#" class="float-end">
                                Security -
                            </a>
                        </li>

                        <li class="w-full text-primary">
                            <a href="#" class="float-end">
                                Infrastructure -
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="w-full text-primary float-end">
                    <a href="#" class="float-end">
                        SHOWROOM
                    </a>
                </li>

                <li class="w-full text-primary float-end">
                    <a href="#" class="float-end">
                        CONTACT
                    </a>
                </li>

                <a
                    class="bg-primary/90 hover:bg-primary focus:ring-1 focus:ring-secondary/50 rounded-lg px-4 py-2 border-0 text-white">
                    Start Project
                </a>
        </div>
    </div>
</nav>