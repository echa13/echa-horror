            <header
                class="bg-blue shadow-sm p-5 sticky top-0 z-10 flex justify-between items-center border-b border-gray-400">
                <h1 class="text-lg font-semibold text-gray-800 tracking-tight">Tambah Data UMKM</h1>
                <div class="flex items-center text-gray-800">
                    <span class="mr-2 font-medium">Halo !</span>
                    <i data-lucide="circle-user" class="w-6 h-6"></i>
                </div>
                <header class="fixed top-0 left-0 right-0 bg-blue-950 text-white shadow-lg z-30">
    <div class="max-w-7xl mx-auto px-6 py-3 flex items-center justify-between">
        <!-- Logo & Title -->
        <div class="flex items-center space-x-3">
            <i data-lucide="store" class="w-6 h-6 text-indigo-100"></i>
            <h1 class="text-2xl font-extrabold tracking-wide">UMKM</h1>
        </div>

        <!-- Navigation -->
        <nav class="hidden md:flex items-center space-x-6 text-sm font-medium">
            <a href="{{ route('umkm.index') }}"
                class="flex items-center hover:text-indigo-200 transition-colors duration-200">
                <i data-lucide="layout-dashboard" class="w-5 h-5 mr-2"></i> Dashboard
            </a>
            <a href="{{ route('umkm.create') }}"
                class="flex items-center hover:text-indigo-200 transition-colors duration-200">
                <i data-lucide="square-user-round" class="w-5 h-5 mr-2"></i> User
            </a>
            <a href="#"
                class="flex items-center hover:text-indigo-200 transition-colors duration-200">
                <i data-lucide="settings" class="w-5 h-5 mr-2"></i> Pengaturan
            </a>
        </nav>

        <!-- Right Side -->
        <div class="flex items-center space-x-4">
            <!-- Optional: Search or Notification -->
            <button class="hover:text-indigo-200">
                <i data-lucide="bell" class="w-5 h-5"></i>
            </button>

            <!-- Logout -->
            <a href="#"
                class="flex items-center bg-blue-900 hover:bg-blue-900 px-4 py-2 rounded-lg transition-all duration-200">
                <i data-lucide="log-out" class="w-5 h-5 mr-2"></i> Logout
            </a>
        </div>
    </div>

    <!-- Mobile Menu Button -->
    <div class="md:hidden px-6 py-2 border-t border-indigo-400/20 flex justify-between items-center">
        <button id="menu-toggle" class="flex items-center space-x-2 hover:text-indigo-200">
            <i data-lucide="menu" class="w-5 h-5"></i>
            <span class="text-sm font-medium">Menu</span>
        </button>
    </div>

    <!-- Mobile Navigation -->
    <nav id="mobile-menu" class="hidden md:hidden bg-blue-900 text-sm font-medium px-6 py-3 space-y-2">
        <a href="{{ route('umkm.index') }}" class="block hover:text-indigo-200">
            <i data-lucide="layout-dashboard" class="inline w-4 h-4 mr-2"></i> Dashboard
        </a>
        <a href="{{ route('umkm.create') }}" class="block hover:text-indigo-200">
            <i data-lucide="square-user-round" class="inline w-4 h-4 mr-2"></i> User
        </a>
        <a href="#" class="block hover:text-indigo-200">
            <i data-lucide="settings" class="inline w-4 h-4 mr-2"></i> Pengaturan
        </a>
        <a href="#" class="block hover:text-blue-900">
            <i data-lucide="log-out" class="inline w-4 h-4 mr-2"></i> Logout
        </a>
    </nav>
</header>

<script>
    // Toggle mobile menu
    document.getElementById('menu-toggle').addEventListener('click', () => {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>

            </header>
