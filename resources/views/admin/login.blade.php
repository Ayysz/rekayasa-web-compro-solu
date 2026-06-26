<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-slate-800 to-slate-900 min-h-screen flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl shadow-2xl w-full max-w-md p-8">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-slate-800">Admin Panel</h1>
            <p class="text-slate-500 mt-2">Masuk ke akun Anda</p>
        </div>
        
        <form method="POST" action="{{ route('admin.login.post') }}">
            @csrf
            
            <div class="mb-6">
                <label class="block text-sm font-medium text-slate-700 mb-2">Email</label>
                <input 
                    type="email" 
                    name="email" 
                    class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition"
                    placeholder="email@example.com"
                    required
                >
            </div>
            
            <div class="mb-6">
                <label class="block text-sm font-medium text-slate-700 mb-2">Password</label>
                <input 
                    type="password" 
                    name="password" 
                    class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition"
                    placeholder="••••••••"
                    required
                >
            </div>
            
            @if ($errors->any())
                <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-lg">
                    <ul class="text-sm text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <button 
                type="submit" 
                class="w-full bg-slate-800 text-white py-3 rounded-lg font-medium hover:bg-slate-700 transition duration-200"
            >
                Masuk
            </button>
        </form>
    </div>
</body>
</html>
