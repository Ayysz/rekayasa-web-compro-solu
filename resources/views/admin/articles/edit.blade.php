@extends('admin.layout')

@section('title', 'Edit Artikel')
@section('page-title', 'Edit Artikel')

@section('content')
    <div class="max-w-3xl bg-white border border-slate-200 rounded-xl shadow-sm p-8">
        <form action="{{ route('admin.articles.update', $article->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="space-y-6">
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Judul Artikel</label>
                    <input type="text" name="name" value="{{ old('name', $article->name) }}" class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-violet-500 focus:border-violet-500 outline-none transition-all" required>
                    @error('name')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Konten</label>
                    <textarea name="content" rows="8" class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-violet-500 focus:border-violet-500 outline-none transition-all" required>{{ old('content', $article->content) }}</textarea>
                    @error('content')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Tag</label>
                        <input type="text" name="tag" value="{{ old('tag', $article->tag) }}" class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-violet-500 focus:border-violet-500 outline-none transition-all" required>
                        @error('tag')
                            <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">ID Kategori</label>
                        <input type="number" name="category_id" value="{{ old('category_id', $article->category_id) }}" class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-violet-500 focus:border-violet-500 outline-none transition-all" required>
                        @error('category_id')
                            <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex gap-3 pt-4">
                    <a href="{{ route('admin.articles.index') }}" class="px-4 py-2.5 bg-slate-100 text-slate-700 rounded-lg hover:bg-slate-200 transition-colors duration-200 font-medium">Kembali</a>
                    <button type="submit" class="px-4 py-2.5 bg-violet-600 text-white rounded-lg hover:bg-violet-700 transition-colors duration-200 font-medium">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection
