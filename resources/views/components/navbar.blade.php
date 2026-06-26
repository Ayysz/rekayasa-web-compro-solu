<header class="relative w-full z-50 font-sans">

    {{-- 1. TOP BAR (Info Kontak) --}}
    <div class="bg-slate-950 border-b border-slate-900 hidden md:block">
        <div class="container mx-auto px-6 py-2">
            <div class="flex flex-wrap justify-between items-center text-xs md:text-sm text-slate-400">

                {{-- Kiri: Alamat & Email --}}
                <div class="flex items-center space-x-6">
                    <div class="flex items-center space-x-2 hover:text-cyan-400 transition-colors">
                        {{-- Icon MapPin --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span>Jakarta Selatan, Indonesia</span>
                    </div>
                    <div class="flex items-center space-x-2 hover:text-cyan-400 transition-colors">
                        {{-- Icon Mail --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span>hello@solu.co.id</span>
                    </div>
                </div>

                {{-- Kanan: Telepon & Jam --}}
                <div class="flex items-center space-x-6">
                    <div class="flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <span>+62 21 5555 0000</span>
                    </div>
                    <div class="flex items-center space-x-2 border-l border-slate-800 pl-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>Mon - Fri: 9:00 - 17:00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- 2. MAIN NAVBAR --}}
    <nav class="bg-slate-900/90 backdrop-blur-md border-b border-slate-800 sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">

                {{-- Logo --}}
                <a href="/" class="flex items-center gap-2 group">
                    <div class="w-10 h-10 bg-linear-to-br from-cyan-500 to-blue-600 rounded-md flex items-center justify-center transform group-hover:scale-105 transition-transform shadow-lg shadow-cyan-500/20">
                        <span class="text-white font-bold text-xl">S</span>
                    </div>
                    <span class="text-2xl font-bold tracking-tight text-white">
                        SOLU<span class="text-cyan-400">.</span>
                    </span>
                </a>

                {{-- Desktop Menu --}}
                <div class="hidden lg:flex items-center space-x-8">
                    {{-- Gunakan {{ route('home') }} atau {{ url('/') }} untuk link asli --}}
                    <a href="/" class="text-slate-300 hover:text-cyan-400 font-medium transition-colors text-sm uppercase tracking-wider">Home</a>
                    <a href="/services" class="text-slate-300 hover:text-cyan-400 font-medium transition-colors text-sm uppercase tracking-wider">Services</a>
                    <a href="#" class="text-slate-300 hover:text-cyan-400 font-medium transition-colors text-sm uppercase tracking-wider">About</a>
                    <a href="#" class="text-slate-300 hover:text-cyan-400 font-medium transition-colors text-sm uppercase tracking-wider">Portfolio</a>
                    <a href="/blog" class="text-slate-300 hover:text-cyan-400 font-medium transition-colors text-sm uppercase tracking-wider">Blog</a>
                </div>

                {{-- CTA Button (Desktop) --}}
                <div class="hidden lg:block">
                    <a href="#" class="inline-flex items-center justify-center px-6 py-3 border border-cyan-500 text-cyan-400 font-semibold rounded-sm hover:bg-cyan-500 hover:text-white transition-all duration-300 text-sm tracking-wide">
                        LET'S TALK
                    </a>
                </div>

                {{-- Mobile Menu Button --}}
                <button id="mobile-menu-btn" class="lg:hidden text-slate-300 hover:text-white focus:outline-none focus:ring-2 focus:ring-cyan-500 rounded-md">
                    <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>

            </div>
        </div>

        {{-- Mobile Menu Dropdown --}}
        <div id="mobile-menu" class="hidden lg:hidden bg-slate-900 border-b border-slate-800 absolute w-full">
            <div class="px-6 pt-2 pb-6 space-y-2 shadow-xl">
                <a href="/" class="block px-3 py-3 text-base font-medium text-slate-300 hover:text-cyan-400 hover:bg-slate-800 rounded-md">Home</a>
                <a href="services" class="block px-3 py-3 text-base font-medium text-slate-300 hover:text-cyan-400 hover:bg-slate-800 rounded-md">Services</a>
                <a href="#" class="block px-3 py-3 text-base font-medium text-slate-300 hover:text-cyan-400 hover:bg-slate-800 rounded-md">About</a>
                <a href="#" class="block px-3 py-3 text-base font-medium text-slate-300 hover:text-cyan-400 hover:bg-slate-800 rounded-md">Portfolio</a>
                <a href="blog" class="block px-3 py-3 text-base font-medium text-slate-300 hover:text-cyan-400 hover:bg-slate-800 rounded-md">Blog</a>
                <div class="pt-4">
                    <a href="#" class="block w-full text-center px-6 py-3 border border-cyan-500 text-cyan-400 font-semibold rounded-sm hover:bg-cyan-500 hover:text-white transition-colors">
                        LET'S TALK
                    </a>
                </div>
            </div>
        </div>
    </nav>

    {{-- Script Sederhana untuk Mobile Toggle --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const btn = document.getElementById('mobile-menu-btn');
            const menu = document.getElementById('mobile-menu');

            if(btn && menu) {
                btn.addEventListener('click', () => {
                    menu.classList.toggle('hidden');
                });
            }
        });
    </script>
</header>
