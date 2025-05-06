<!-- filepath: d:\Sem 4\pweb\uts_pweb\resources\views\components\sidebar.blade.php -->
<div class="w-64 bg-green-900 h-screen fixed left-0 top-0 text-white shadow-lg">
    <div class="p-5 border-b border-green-700 flex items-center gap-3">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10">
        <span class="font-semibold text-lg">Kayu Indonesia</span>
    </div>

    <!-- Menu Items -->
    <nav class="p-4">
        <div class="mb-2">
            <a href="{{ route('dashboard', ['username' => request('username')]) }}"
               class="block px-4 py-3 text-white rounded-lg hover:bg-green-700 transition">
               <i class="fas fa-home mr-3"></i> Dashboard
            </a>
        </div>

        <div class="mb-2">
            <a href="{{ route('profile', ['username' => request('username')]) }}"
               class="block px-4 py-3 text-white rounded-lg hover:bg-green-700 transition">
               <i class="fas fa-user mr-3"></i> Profile
            </a>
        </div>

        <div class="mb-2">
           <a href="{{ route('pengelolaan', ['username' => request('username')]) }}"
               class="block px-4 py-3 text-white rounded-lg hover:bg-green-700 transition">
               <i class="fas fa-tasks mr-3"></i> Pengelolaan
            </a>
        </div>
    </nav>
</div>

<!-- Tambahkan Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
