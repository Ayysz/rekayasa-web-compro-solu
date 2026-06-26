@extends('layout.app')

@section('title', 'solutions')

@section('content')
    {{-- 2. Hero Section Solutions --}}
    <section class="h-[22vh] flex items-center justify-center relative overflow-hidden bg-slate-900 border-b border-slate-800">
        <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/circuit-board.png')]"></div>
        <div class="text-center relative z-10 px-6">
            <h1 class="text-5xl md:text-6xl font-bold mb-4 text-white">Our Solutions</h1>
            <p class="text-cyan-400 text-lg tracking-widest uppercase">Technology for the Future</p>
        </div>
    </section>

    {{-- 3. Content Section (Grid Solutions) --}}
    {{-- Class bg-slate-950 agar menyatu dengan background body --}}
    <section class="bg-slate-950 py-24 relative overflow-hidden">
        {{-- Background Glow Effect --}}
        <div class="absolute top-0 left-0 w-full h-full opacity-5 pointer-events-none bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>
        <div class="absolute top-0 right-0 w-96 h-96 bg-cyan-900/20 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>

        <div class="container mx-auto px-6 relative z-10">

            {{-- Section Headline --}}
            <div class="text-center mb-20">
                <h2 class="text-3xl md:text-5xl font-bold text-white mb-6 leading-tight">
                    We Offer An Effective <br />
                    <span class="text-transparent bg-clip-text bg-linear-to-r from-cyan-400 to-blue-500">
                        Wide Area Business Solutions
                    </span>
                </h2>
                <div class="w-24 h-1 bg-cyan-500 mx-auto rounded-full"></div>
            </div>

            {{-- GRID LOOP --}}
            {{-- Kita looping data $solutions yang dikirim dari Controller --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($services as $solution)
                    {{-- PANGGIL KOMPONEN KARTU --}}
                    <x-solution-card
                        :title="$solution['title']"
                        :description="$solution['description']"
                        :image="asset($solution['image'])"
                        :link="$solution['link']"
                    />
                @endforeach
            </div>

            {{-- Jika data kosong --}}
            @if($services->isEmpty())
                <p class="text-center text-slate-500 mt-10">Belum ada solusi yang tersedia.</p>
            @endif

            {{-- Pagination Links --}}
            @if($services->hasPages())
                <div class="mt-12 flex justify-center">
                    {{ $services->links('vendor.pagination.dark') }}
                </div>
            @endif

        </div>
    </section>

@endsection
