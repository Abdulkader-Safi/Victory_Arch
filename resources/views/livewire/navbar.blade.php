{{-- Navbar --}}
<nav class="container fixed top-0 w-full flex justify-between items-center z-50 h-4 py-10 px-0">
    <div class="w-full">
        <img src="{{asset('img/logo/va_logo.svg')}}" alt="Victory Arch Logo">
    </div>

    <div class="w-full" x-data="{ open: false }">
        <ul class="flex justify-center items-center gap-4">
            <li class="text-primary"><a href="#">HOME</a></li>
            <li class="text-primary"><a href="#">ABOUT</a></li>
            <li class="text-primary relative">
                <button @click="open = !open" @click.away="open = false">
                    SOLUTIONS
                </button>
                <ul x-show="open" x-transition:enter="transition ease-out duration-200"
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

    <div class="w-full flex justify-end items-center">
        <button
            class="btn bg-primary/90 hover:bg-primary focus:ring-1 focus:ring-secondary/50 rounded-lg px-4 py-2 border-0 text-[#fff]">
            Start Project
        </button>
    </div>
</nav>