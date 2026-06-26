
<footer>

    {{-- 1. BAGIAN FORM "REQUEST A CALL BACK" (Tema Dark) --}}
    <section class="bg-slate-900 py-16 px-6 relative overflow-hidden">
        {{-- Dekorasi Background Belakang (Optional) --}}
        <div class="absolute inset-0 opacity-5 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>

        <div class="container mx-auto relative z-10">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-12">

                {{-- Kolom Kiri: Headline --}}
                <div class="lg:w-5/12 text-center lg:text-left">
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-4 leading-tight">
                        Request A Call Back
                    </h2>
                    <p class="text-slate-400 text-lg mb-6">
                        Have a project in mind? Fill out the form and our team will get back to you shortly to discuss how we can help.
                    </p>
                    <div class="flex items-center justify-center lg:justify-start gap-4">
                        <div class="w-12 h-1 bg-cyan-500 rounded-full"></div>
                        <span class="text-cyan-400 font-semibold tracking-wider text-sm uppercase">We are here to help</span>
                    </div>
                </div>

                {{-- Kolom Kanan: Form --}}
                <form class="lg:w-6/12 w-full bg-slate-800/50 backdrop-blur-sm p-8 rounded-xl border border-slate-700 shadow-2xl">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        {{-- Nama --}}
                        <div>
                            <label class="block text-slate-400 text-xs font-bold mb-2 uppercase">Your Name</label>
                            <input type="text" placeholder="John Doe" class="w-full bg-slate-900 text-white border border-slate-700 rounded py-3 px-4 focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition-colors" required>
                        </div>
                        {{-- Email --}}
                        <div>
                            <label class="block text-slate-400 text-xs font-bold mb-2 uppercase">Your Email</label>
                            <input type="email" placeholder="john@example.com" class="w-full bg-slate-900 text-white border border-slate-700 rounded py-3 px-4 focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition-colors" required>
                        </div>
                    </div>
                    {{-- Telepon --}}
                    <div class="mb-6">
                        <label class="block text-slate-400 text-xs font-bold mb-2 uppercase">Phone Number</label>
                        <input type="tel" placeholder="+62 812..." class="w-full bg-slate-900 text-white border border-slate-700 rounded py-3 px-4 focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition-colors" required>
                    </div>
                    {{-- Button --}}
                    <button type="submit" class="w-full bg-linear-to-r from-cyan-500 to-blue-600 hover:from-cyan-400 hover:to-blue-500 text-white font-bold py-4 px-6 rounded transition-all duration-300 transform hover:-translate-y-1 shadow-lg shadow-cyan-500/30">
                        SEND NOW
                    </button>
                </form>
            </div>
        </div>
    </section>

    {{-- 2. BAGIAN FOOTER UTAMA (Tema Putih) --}}
    <div class="bg-white text-slate-700 pt-16 pb-8 border-t border-slate-100">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 mb-12">

                {{-- Kolom 1: Tentang Kami & Sosial --}}
                <div>
                    <a href="/" class="flex items-center gap-2 mb-6 group">
                        <!-- Logo Versi Gelap untuk Background Putih -->
                        <div class="w-10 h-10 bg-slate-900 rounded-md flex items-center justify-center transform group-hover:scale-105 transition-transform">
                            <span class="text-white font-bold text-xl">S</span>
                        </div>
                        <span class="text-3xl font-bold tracking-tight text-slate-900">
                            SOLU<span class="text-cyan-500">.</span>
                        </span>
                    </a>
                    <p class="text-slate-500 leading-relaxed mb-6">
                        We provide advanced technology solutions that drive growth, efficiency, and innovation for your enterprise. Partner with us to elevate your business.
                    </p>

                    {{-- Social Icons --}}
                    <div class="flex space-x-4">
                        {{-- Facebook --}}
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-500 hover:bg-cyan-500 hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path></svg>
                        </a>
                        {{-- Twitter --}}
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-500 hover:bg-cyan-500 hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path></svg>
                        </a>
                        {{-- Instagram --}}
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-500 hover:bg-cyan-500 hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12 16.5a4.5 4.5 0 100-9 4.5 4.5 0 000 9z"></path></svg>
                        </a>
                    </div>
                </div>

                {{-- Kolom 2: Information --}}
                <div>
                    <h3 class="text-xl font-bold text-slate-900 mb-6">Information</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-cyan-500 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <div>
                                <p class="font-semibold text-slate-800">Address</p>
                                <p class="text-slate-500 text-sm">Jl. Jendral Sudirman No. 10, <br>Jakarta Selatan, 12190</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-cyan-500 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <div>
                                <p class="font-semibold text-slate-800">Email Us</p>
                                <a href="mailto:hello@solu.co.id" class="text-slate-500 text-sm hover:text-cyan-500">hello@solu.co.id</a>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-cyan-500 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <div>
                                <p class="font-semibold text-slate-800">Call Us</p>
                                <a href="tel:+622155550000" class="text-slate-500 text-sm hover:text-cyan-500">+62 21 5555 0000</a>
                            </div>
                        </li>
                    </ul>
                </div>

                {{-- Kolom 3: Sitemap --}}
                <div>
                    <h3 class="text-xl font-bold text-slate-900 mb-6">Sitemap</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-slate-500 hover:text-cyan-500 transition-colors flex items-center gap-2"><span class="w-1.5 h-1.5 bg-cyan-500 rounded-full"></span> Home</a></li>
                        <li><a href="#" class="text-slate-500 hover:text-cyan-500 transition-colors flex items-center gap-2"><span class="w-1.5 h-1.5 bg-cyan-500 rounded-full"></span> About Us</a></li>
                        <li><a href="#" class="text-slate-500 hover:text-cyan-500 transition-colors flex items-center gap-2"><span class="w-1.5 h-1.5 bg-cyan-500 rounded-full"></span> Services</a></li>
                        <li><a href="#" class="text-slate-500 hover:text-cyan-500 transition-colors flex items-center gap-2"><span class="w-1.5 h-1.5 bg-cyan-500 rounded-full"></span> Products</a></li>
                        {{-- <li><a href="#" class="text-slate-500 hover:text-cyan-500 transition-colors flex items-center gap-2"><span class="w-1.5 h-1.5 bg-cyan-500 rounded-full"></span> Portfolio</a></li>
                        <li><a href="#" class="text-slate-500 hover:text-cyan-500 transition-colors flex items-center gap-2"><span class="w-1.5 h-1.5 bg-cyan-500 rounded-full"></span> Contact</a></li> --}}
                    </ul>
                </div>
            </div>

            {{-- 3. COPYRIGHT BAR --}}
            <div class="border-t border-slate-200 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-slate-400">
                <p>&copy; {{ date('Y') }} Solu Co. All rights reserved.</p>
                <div class="flex space-x-6">
                    <a href="#" class="hover:text-slate-900 transition-colors">Privacy Policy</a>
                    <a href="#" class="hover:text-slate-900 transition-colors">Terms of Service</a>
                </div>
            </div>
        </div>
    </div>

</footer>
