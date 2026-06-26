@extends('admin.layout')

@section('title', 'Detail Pesan')
@section('page-title', 'Detail Pesan')

@section('content')
    <div class="max-w-2xl bg-white border border-slate-200 rounded-xl shadow-sm p-8">
        <div class="space-y-6">
            <div class="pb-6 border-b border-slate-200">
                <h2 class="text-xl font-bold text-slate-900">{{ $message->name }}</h2>
                <p class="text-slate-500">{{ $message->email }}</p>
            </div>

            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-slate-500 mb-2">ID</label>
                    <p class="text-slate-900 font-medium">{{ $message->id }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-500 mb-2">Trace ID</label>
                    <p class="text-slate-900 font-medium font-mono">{{ $message->trace_id }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-500 mb-2">Telepon</label>
                    <p class="text-slate-900 font-medium">{{ $message->phone }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-500 mb-2">Dibuat Pada</label>
                    <p class="text-slate-900 font-medium">{{ $message->created_at->format('d M Y H:i') }}</p>
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-500 mb-2">Pesan</label>
                <div class="bg-slate-50 border border-slate-200 rounded-lg p-4 text-slate-700">
                    {{ $message->content ?: '-' }}
                </div>
            </div>

            <div class="flex gap-3 pt-6">
                <a href="{{ route('admin.messages.index') }}" class="px-4 py-2.5 bg-slate-100 text-slate-700 rounded-lg hover:bg-slate-200 transition-colors duration-200 font-medium">Kembali</a>
            </div>
        </div>
    </div>
@endsection
