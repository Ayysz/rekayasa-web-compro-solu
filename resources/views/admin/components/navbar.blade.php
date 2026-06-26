<header class="bg-white border-b border-slate-200 sticky top-0 z-10">
    <div class="flex items-center justify-between px-6 py-4">
        <h2 class="text-lg font-semibold text-slate-900">
            @yield('page-title', 'Dashboard')
        </h2>
        <div class="flex items-center gap-4">
            <div class="flex items-center gap-3 px-3 py-2 bg-slate-50 rounded-lg border border-slate-200">
                <div class="w-9 h-9 bg-indigo-600 rounded-lg flex items-center justify-center text-white font-semibold text-sm">
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                </div>
                <div class="flex flex-col">
                    <span class="text-sm font-medium text-slate-900">{{ Auth::user()->name }}</span>
                    <span class="text-xs text-slate-500">Administrator</span>
                </div>
            </div>
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit" class="flex items-center gap-2 px-4 py-2 text-slate-600 hover:text-slate-900 hover:bg-slate-100 rounded-lg transition-colors duration-200 font-medium">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                    </svg>
                    Keluar
                </button>
            </form>
        </div>
    </div>
</header>
