{{-- resources/views/components/solution-card.blade.php --}}

@props(['title', 'description', 'image', 'link'])

<div class="group relative bg-slate-900 rounded-xl overflow-hidden border border-slate-800 hover:border-cyan-500/50 hover:shadow-2xl hover:shadow-cyan-500/10 transition-all duration-300 transform hover:-translate-y-2">
    {{-- Image Area --}}
    <div class="h-60 overflow-hidden relative">
        {{-- Optional: Dark overlay for better text contrast if needed --}}
        <div class="absolute inset-0 bg-slate-900/20 group-hover:bg-transparent transition-colors z-10"></div>

        {{-- Gambar --}}
        <img
            src="{{ $image }}"
            alt="{{ $title }}"
            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700"
        >
    </div>

    {{-- Content Area --}}
    <div class="p-8">
        {{-- Title --}}
        <h3 class="text-2xl font-bold text-white mb-4 group-hover:text-cyan-400 transition-colors">
            {{ $title }}
        </h3>

        {{-- Description --}}
        <p class="text-slate-400 mb-8 leading-relaxed">
            {{ $description }}
        </p>

        {{-- Link Button --}}
        <a href="{{ $link }}" class="inline-flex items-center text-cyan-500 font-bold text-sm uppercase tracking-wider hover:text-cyan-300 transition-colors group/link">
            Read More
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 transform group-hover/link:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
        </a>
    </div>
</div>
