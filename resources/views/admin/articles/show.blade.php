@extends('admin.layout')

@section('title', 'Detail Artikel')
@section('page-title', 'Detail Artikel')

@section('content')
    <div class="max-w-3xl bg-white border border-slate-200 rounded-xl shadow-sm p-8">
        <div class="space-y-6">
            <div class="pb-6 border-b border-slate-200">
                <h2 class="text-xl font-bold text-slate-900">{{ $article->name }}</h2>
                <span class="inline-block mt-2 px-2.5 py-1 bg-violet-100 text-violet-700 rounded-full text-xs font-medium">{{ $article->tag }}</span>
            </div>

            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-slate-500 mb-2">ID</label>
                    <p class="text-slate-900 font-medium">{{ $article->id }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-500 mb-2">Slug</label>
                    <p class="text-slate-900 font-medium">{{ $article->slug }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-500 mb-2">ID Kategori</label>
                    <p class="text-slate-900 font-medium">{{ $article->category_id }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-500 mb-2">Dibuat Pada</label>
                    <p class="text-slate-900 font-medium">{{ $article->created_at->format('d M Y H:i') }}</p>
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-500 mb-2">Konten</label>
                <p class="text-slate-700 leading-relaxed">{{ $article->content }}</p>
            </div>

            <div class="flex gap-3 pt-6">
                <a href="{{ route('admin.articles.index') }}" class="px-4 py-2.5 bg-slate-100 text-slate-700 rounded-lg hover:bg-slate-200 transition-colors duration-200 font-medium">Kembali</a>
                <a href="{{ route('admin.articles.edit', $article->id) }}" class="px-4 py-2.5 bg-amber-600 text-white rounded-lg hover:bg-amber-700 transition-colors duration-200 font-medium">Edit</a>
            </div>
        </div>
    </div>
@endsection
