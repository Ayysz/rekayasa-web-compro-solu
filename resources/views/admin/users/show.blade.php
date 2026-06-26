@extends('admin.layout')

@section('title', 'Detail User')
@section('page-title', 'Detail User')

@section('content')
    <div class="max-w-2xl bg-white border border-slate-200 rounded-xl shadow-sm p-8">
        <div class="space-y-6">
            <div class="flex items-center gap-4 pb-6 border-b border-slate-200">
                <div class="w-14 h-14 bg-indigo-100 text-indigo-600 rounded-lg flex items-center justify-center font-bold text-xl">
                    {{ strtoupper(substr($user->name, 0, 1)) }}
                </div>
                <div>
                    <h2 class="text-xl font-bold text-slate-900">{{ $user->name }}</h2>
                    <p class="text-slate-500">{{ $user->email }}</p>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-slate-500 mb-2">ID</label>
                    <p class="text-slate-900 font-medium">{{ $user->id }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-500 mb-2">Dibuat Pada</label>
                    <p class="text-slate-900 font-medium">{{ $user->created_at->format('d M Y H:i') }}</p>
                </div>
            </div>

            <div class="flex gap-3 pt-6">
                <a href="{{ route('admin.users.index') }}" class="px-4 py-2.5 bg-slate-100 text-slate-700 rounded-lg hover:bg-slate-200 transition-colors duration-200 font-medium">Kembali</a>
                <a href="{{ route('admin.users.edit', $user->id) }}" class="px-4 py-2.5 bg-amber-600 text-white rounded-lg hover:bg-amber-700 transition-colors duration-200 font-medium">Edit</a>
            </div>
        </div>
    </div>
@endsection
