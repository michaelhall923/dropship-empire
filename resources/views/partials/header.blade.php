<header class="sticky top-0 z-40 shadow-sm bg-gray-100 text-gray-600 p-4" x-data="{ open: false }">
    <div class="flex justify-between items-center container mx-auto">
        <a href="{{ route('home') }}"><h1 class="font-bold tracking-widest uppercase text-2xl">Dropship <span class="text-red-500">Empire</span></h1></a>

        <nav class="hidden md:flex">
            {{-- <x-nav-link route="home">Home</x-nav-link> --}}
            <x-nav-link route="home">Products</x-nav-link>
            <x-nav-link route="testimonials">Testimonials</x-nav-link>
            <x-nav-link route="about">WTF Is Dropshipping?!</x-nav-link>
            {{-- <x-nav-link route="contact">Contact</x-nav-link> --}}
        </nav>

        <div class="md:hidden relative">
            <button class="fill-current " @click="open = !open">
                <svg x-show="!open"
                    x-transition:enter="duration-300"
                    x-transition:enter-start="opacity-0"
                    x-transition:leave="duration-300"
                    x-transition:leave-end="opacity-0"
                    class="absolute"
                    style="top: 0; left: -18px;"
                    viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M3 4h18v2H3V4zm0 7h18v2H3v-2zm0 7h18v2H3v-2z"/></svg>
                <svg x-show="open"
                    x-transition:enter="duration-300"
                    x-transition:enter-start="opacity-0"
                    x-transition:leave="duration-300"
                    x-transition:leave-end="opacity-0"
                    class="absolute"
                    style="top: 0; left: -18px;"
                    viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z"/></svg>
            </button>
        </div>
    </div>

    <!-- mobile menu -->
    <nav x-show="open"
        class="mt-3 md:hidden"
    >
        {{-- <x-mobile-nav-link route="home">Home</x-mobile-nav-link> --}}
        <x-mobile-nav-link route="home">Products</x-mobile-nav-link>
        <x-mobile-nav-link route="testimonials">Testimonials</x-mobile-nav-link>
        <x-mobile-nav-link route="about">WTF Is Dropshipping?</x-mobile-nav-link>
        {{-- <x-mobile-nav-link route="contact">Contact</x-mobile-nav-link> --}}
    </nav>
</header>
