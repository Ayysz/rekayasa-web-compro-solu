@extends('layout.app')

@section('title', 'blog')

@section('content')

    {{-- 2. Hero Section (Header Blog) --}}
    <section class="bg-slate-900 pt-20 pb-12 border-b border-slate-800 relative overflow-hidden">
        {{-- Background Decoration --}}
        <div class="absolute inset-0 opacity-5 bg-[url('https://www.transparenttextures.com/patterns/circuit-board.png')]"></div>

        <div class="container mx-auto px-6 relative z-10">
            {{-- Breadcrumb --}}
            <div class="flex items-center text-sm text-slate-400 mb-4 font-medium">
                <a href="{{ url('/') }}" class="hover:text-cyan-400 transition-colors">Home</a>
                <span class="mx-3 text-slate-600">/</span>
                <span class="text-slate-500">Insight</span>
                <span class="mx-3 text-slate-600">/</span>
                <span class="text-cyan-400 font-bold">Blog</span>
            </div>

            {{-- Page Title --}}
            <h1 class="text-4xl md:text-5xl font-bold text-white tracking-tight">
                Latest <span class="text-cyan-400">Insights</span>
            </h1>
        </div>
    </section>

    {{-- 3. Content Grid --}}
    <section class="py-20 relative">
        <div class="absolute top-0 right-0 w-80 h-80 bg-cyan-900/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2 pointer-events-none"></div>

        <div class="container mx-auto px-6">

            {{-- Grid 2 Kolom (sesuai gambar) --}}
            {{-- md:grid-cols-2 akan menampilkan 2 kartu sejajar di layar tablet/desktop --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                @foreach($posts as $post)
                    {{-- Panggil Komponen Blog Card --}}
                    <x-blog-card
                    :category="$post['category']"
                    :title="$post['name']"
                    :date="$post['date'] ?? date('Y-m-d')"
                    :author="$post['author'] ?? 'Admin Author'"
                    :image="$post['image'] ?? 'https://www.transparenttextures.com/patterns/strange-bullseyes.png'"
                    :slug="'/blog/' . $post['slug']"
                    />
                @endforeach

            </div>

            {{-- Jika tidak ada artikel --}}
            @if($posts->isEmpty())
                <div class="text-center py-12">
                    <p class="text-slate-500">No articles found.</p>
                </div>
            @endif


             <div class="mt-4">
                {{ $posts->links() }}
            </div>



        </div>
    </section>

@endsection
