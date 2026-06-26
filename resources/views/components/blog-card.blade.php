{{-- resources/views/components/blog-card.blade.php --}}

@props(['category', 'title', 'date', 'author', 'image', 'slug'])

<a href="{{ $slug }}" class="group flex flex-col h-full">
    {{-- Card Container --}}
    <div class="bg-slate-900 rounded-xl overflow-hidden border border-slate-800 hover:border-cyan-500/50 hover:shadow-2xl hover:shadow-cyan-500/10 transition-all duration-300 transform hover:-translate-y-2 h-full flex flex-col">

        {{-- Image Area --}}
        <div class="h-64 overflow-hidden relative">
            <img
                src="{{ $image }}"
                alt="{{ $title }}"
                class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700"
            >
            {{-- Category Badge (Absolute) --}}
            <div class="absolute top-4 left-4 bg-cyan-500/90 backdrop-blur-sm text-white text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-sm shadow-lg">
                {{ $category }}
            </div>
        </div>

        {{-- Content Area --}}
        <div class="p-6 grow flex flex-col">
            <div class="flex items-center text-slate-400 text-sm mb-4 space-x-4">
                {{-- Date Icon + Date --}}
                <div class="flex items-center space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span>{{ $date }}</span>
                </div>
                {{-- Separator --}}
                <span class="text-slate-700">|</span>
                {{-- Author Name --}}
                <span class="capitalize">By {{ $author }}</span>
            </div>

            {{-- Title --}}
            <h3 class="text-xl font-bold text-white mb-4 leading-snug group-hover:text-cyan-400 transition-colors">
                {{ $title }}
            </h3>

            {{-- Read More Arrow (Pushed to bottom) --}}
            <div class="mt-auto pt-4 border-t border-slate-800/50 flex items-center text-cyan-500 text-sm font-semibold uppercase tracking-wider group-hover:translate-x-2 transition-transform">
                Read Article
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </div>
        </div>
    </div>
</a>
