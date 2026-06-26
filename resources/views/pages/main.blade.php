@extends('layout.app')

@section('title', 'solutions')

@section('content')
{{-- 2. Konten Utama (Placeholder) --}}
    {{-- Di sini Anda bisa menempatkan Hero Section, About, Services, dll --}}
    <main class="grow">

        {{-- Hero Section Sederhana --}}
        <section class="h-[80vh] flex items-center justify-center bg-[#0a192f] relative overflow-hidden">
            <!-- Background Pattern -->
            <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/circuit-board.png')]"></div>

            <div class="relative z-10 text-center px-6">
                <h1 class="text-5xl md:text-7xl font-bold mb-6 text-white leading-tight">
                    Elevating Your Business <br />
                    <span class="text-cyan-400">To New Heights.</span>
                </h1>
                <p class="text-slate-400 text-lg max-w-2xl mx-auto mb-10">
                    We provide advanced technology solutions that drive growth, efficiency, and innovation.
                </p>
                <a href="#contact" class="inline-block bg-cyan-500 hover:bg-cyan-400 text-black font-bold py-4 px-10 rounded-sm transition-all">
                    GET IN TOUCH
                </a>
            </div>
        </section>

        {{-- Dummy Space untuk Scroll --}}
        <div class="bg-white text-slate-900 py-20 text-center">
            <h2 class="text-3xl font-bold mb-4">Our Services</h2>
            <p class="text-slate-600">Scroll down to see the footer transition...</p>
        </div>

    </main>
@endsection
