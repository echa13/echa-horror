<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMKM Lounge - Situs Web Restoran Modern</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <!-- Font Inter for modern look -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {

                        'lounge-primary': '#0A2346',
                        'lounge-accent': '#F4A261',
                        'lounge-bg': '#F8F9FA',
                        'lounge-dark': '#071833',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        serif: ['Playfair Display', 'serif'],
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #F8F9FA;
        }

        .hero-section {
            /* Mengganti warna overlay dan placeholder background */
            background: linear-gradient(rgba(10, 35, 70, 0.8), rgba(7, 24, 51, 0.95)), url('https://placehold.co/1920x1080/0A2346/F4A261?text=Modern+Cafe+Interior');
            background-size: cover;
            background-position: center;
            min-height: 80vh;
            display: flex; /* Memastikan konten di tengah */
            align-items: center;
            justify-content: center;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 60px; /* Lebih lebar */
            height: 3px;
            margin: 12px auto 0;
            background-color: #3f4975; /* Warna aksen baru */
            border-radius: 2px;
        }

        /* Styling for subtle card hover effect */
        .card-hover:hover {
            box-shadow: 0 10px 20px rgba(10, 35, 70, 0.15);
            transform: translateY(-5px);
        }

        /* Smooth scrolling for anchors */
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body>
    <!-- Overlay Menu for Mobile -->
    <div id="mobile-menu" class="fixed inset-0 bg-lounge-dark z-50 transform translate-x-full transition-transform duration-300 ease-in-out lg:hidden">
        <div class="flex justify-end p-6">
            <button onclick="UMKM()" class="text-white hover:text-lounge-accent transition">
                <i data-lucide="x" class="w-8 h-8"></i>
            </button>
        </div>
        <nav class="flex flex-col items-center justify-center space-y-8 text-2xl font-sans mt-10">
            <a href="#home" class="text-gray-200 hover:text-lounge-accent transition font-semibold" onclick="umkm()">Beranda</a>
            <a href="#about" class="text-gray-200 hover:text-lounge-accent transition font-semibold" onclick="umkm()">Tentang Kami</a>
            <a href="#menu" class="text-gray-200 hover:text-lounge-accent transition font-semibold" onclick="umkm()">Menu</a>
            <!-- Tautan Dashboard Mobile -->
            <a href="{{ route('umkm.index') }}" class="bg-lounge-accent text-lounge-dark font-bold py-3 px-8 rounded-full shadow-lg hover:bg-opacity-90 transition mt-10" onclick="toggleMenu()">
                Dashboard Guest
            </a>
        </nav>
    </div>

    <!-- 1. Header & Navigation -->
    <header class="bg-lounge-primary text-white p-4 sticky top-0 z-40 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo/Nama UMKM -->
            <a href="#home" class="text-2xl font-serif font-bold tracking-wider text-lounge-accent">
                UMKM
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex space-x-6 font-medium text-sm items-center">
                <a href="#home" class="hover:text-lounge-accent transition duration-150 p-2">Beranda</a>
                <a href="#about" class="hover:text-lounge-accent transition duration-150 p-2">Tentang Kami</a>
                <a href="#contact" class="hover:text-lounge-accent transition duration-150 p-2">Kontak</a>

                <!-- TOMBOL DASHBOARD -->
                <a href="{{ route('umkm.index') }}" class="bg-lounge-accent text-lounge-dark font-bold py-2 px-5 rounded-full shadow-md hover:shadow-xl hover:bg-opacity-90 transition duration-300 ml-6 flex items-center transform hover:scale-105">
                    <i data-lucide="layout-dashboard" class="w-4 h-4 mr-2"></i>
                    Dashboard
                </a>
            </nav>

            <!-- Mobile Menu Button -->
            <button onclick="toggleMenu()" class="lg:hidden text-lounge-accent hover:text-white transition">
                <i data-lucide="menu" class="w-6 h-6"></i>
            </button>
        </div>
    </header>

    <!-- 2. Hero Section (Home) -->
    <section id="home" class="hero-section text-white text-center p-8">
        <div class="max-w-4xl py-20 px-4">
            <p class="text-lounge-accent text-lg mb-4 font-serif italic tracking-widest">UMKM Kita</p>
            <h1 class="text-6xl md:text-8xl font-sans font-extrabold leading-tight mb-6 tracking-tight">
             <span class="text-lounge-accent">UMKM</span>
            </h1>
            <p class="text-xl mb-10 text-gray-200 max-w-2xl mx-auto">

            </p>
            <a href="#menu" class="bg-lounge-accent text-lounge-dark font-bold py-3 px-10 rounded-full shadow-2xl hover:bg-opacity-90 transition duration-300 inline-flex items-center transform hover:scale-105">
                Jelajahi Menu
                <i data-lucide="chevrons-down" class="w-5 h-5 ml-2"></i>
            </a>
        </div>
    </section>

    <!-- 3. About Section -->
    <section id="about" class="py-24 bg-lounge-bg">
        <div class="container mx-auto px-6 lg:px-12 grid md:grid-cols-2 gap-16 items-center">
            <div class="relative rounded-xl overflow-hidden shadow-2xl">
                <!-- Placeholder Image (UMKM Story) -->
                <img src="https://placehold.co/800x600/0A2346/F4A261?text=Warm+Seating+Area" alt="Interior Lounge UMKM" class="w-full h-full object-cover rounded-xl transition duration-500 hover:opacity-90">
                <div class="absolute inset-0 bg-lounge-primary opacity-20 hover:opacity-10 transition"></div>
            </div>
            <div>
                <h2 class="text-5xl font-serif section-title text-lounge-dark mb-8 text-center md:text-left">
                    Kisah Kami
                </h2>
                <p class="text-gray-700 text-lg mb-4 leading-relaxed border-l-4 border-lounge-accent pl-4">
                    UMKM
                </p>
                <a href="#contact" class="mt-8 inline-flex items-center text-lounge-accent hover:text-lounge-primary font-bold transition">
                    Lihat Lokasi Kami
                    <i data-lucide="map" class="w-4 h-4 ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- 4. Menu/Product Section (with improved aesthetic) -->
    <section id="menu" class="py-24 bg-white">
        <div class="container mx-auto px-6 lg:px-12 text-center">
            <h2 class="text-5xl font-serif section-title text-lounge-dark mb-16">
                Pilihan Terbaik
            </h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- Menu Item 1 -->
                <div class="bg-lounge-bg p-6 rounded-xl shadow-lg card-hover transition duration-300">
                    <img src="https://placehold.co/400x300/F4A261/0A2346?text=Espresso+Blend" alt="Kopi Susu Spesial" class="rounded-lg mb-4 w-full h-48 object-cover border-4 border-lounge-accent">
                    <h3 class="text-2xl font-sans text-lounge-dark font-semibold mb-2">Kopi Nusantara Blend</h3>
                    <p class="text-gray-600 mb-3 text-sm">Perpaduan biji kopi pilihan dari Aceh dan Toraja, disajikan dengan *creamer* spesial.</p>
                    <span class="text-lounge-primary text-2xl font-extrabold block mt-3">Rp 28.000</span>
                </div>

                <!-- Menu Item 2 -->
                <div class="bg-lounge-bg p-6 rounded-xl shadow-lg card-hover transition duration-300">
                    <img src="https://placehold.co/400x300/F4A261/0A2346?text=Spicy+Rice" alt="Nasi Goreng Premium" class="rounded-lg mb-4 w-full h-48 object-cover border-4 border-lounge-accent">
                    <h3 class="text-2xl font-sans text-lounge-dark font-semibold mb-2">Sate Lilit Premium</h3>
                    <p class="text-gray-600 mb-3 text-sm">Daging pilihan yang dibalut rempah Bali, disajikan dengan sambal matah dan nasi hangat.</p>
                    <span class="text-lounge-primary text-2xl font-extrabold block mt-3">Rp 55.000</span>
                </div>

                <!-- Menu Item 3 -->
                <div class="bg-lounge-bg p-6 rounded-xl shadow-lg card-hover transition duration-300">
                    <img src="https://placehold.co/400x300/F4A261/0A2346?text=Artisan+Dessert" alt="Dessert Cokelat Mewah" class="rounded-lg mb-4 w-full h-48 object-cover border-4 border-lounge-accent">
                    <h3 class="text-2xl font-sans text-lounge-dark font-semibold mb-2">Red Velvet Cake</h3>
                    <p class="text-gray-600 mb-3 text-sm">Kue lembut dengan *cream cheese frosting*, manisnya pas, cocok untuk penutup.</p>
                    <span class="text-lounge-primary text-2xl font-extrabold block mt-3">Rp 42.000</span>
                </div>
            </div>

            <a href="#" class="mt-16 inline-block bg-lounge-primary text-white font-semibold py-3 px-12 rounded-full shadow-lg hover:bg-lounge-dark transition duration-300 transform hover:scale-105">
                Lihat Semua Menu & Harga
            </a>
        </div>
    </section>

    <!-- 6. Contact Section -->
    <section id="contact" class="py-24 bg-lounge-bg">
        <div class="container mx-auto px-6 lg:px-12">
            <h2 class="text-5xl font-serif section-title text-lounge-dark mb-16 text-center">
                Lokasi & Kontak
            </h2>

            <div class="grid md:grid-cols-3 gap-8 text-center">
                <!-- Kontak -->
                <div class="p-8 bg-white rounded-xl shadow-xl border-t-4 border-lounge-accent">
                    <i data-lucide="phone" class="w-8 h-8 mx-auto text-lounge-primary mb-4"></i>
                    <h3 class="text-xl font-bold text-lounge-dark mb-2">Hubungi Kami</h3>
                    <p class="text-gray-600">(+62) 812-XXXX-7890</p>
                </div>

                <!-- Alamat -->
                <div class="p-8 bg-white rounded-xl shadow-xl border-t-4 border-lounge-accent">
                    <i data-lucide="map-pin" class="w-8 h-8 mx-auto text-lounge-primary mb-4"></i>
                    <h3 class="text-xl font-bold text-lounge-dark mb-2">Alamat Utama</h3>
                    <p class="text-gray-600">Jl. Inovasi No. 45, Sentra UMKM, Kota Jakarta</p>
                </div>

            </div>

            <!-- Formulir Kontak Sederhana -->
            <div class="mt-20 max-w-2xl mx-auto p-10 bg-white rounded-xl shadow-2xl">
                <h3 class="text-3xl font-serif text-lounge-dark text-center mb-6">Kirim Pertanyaan Anda</h3>
                <form action="#" method="POST" class="space-y-6">
                    <div>
                        <input type="text" placeholder="Nama Lengkap" class="w-full p-4 border border-gray-300 rounded-lg focus:ring-lounge-accent focus:border-lounge-accent transition duration-150">
                    </div>
                    <div>
                        <input type="email" placeholder="Alamat Email" class="w-full p-4 border border-gray-300 rounded-lg focus:ring-lounge-accent focus:border-lounge-accent transition duration-150">
                    </div>
                    <div>
                        <textarea placeholder="Pesan Anda" rows="5" class="w-full p-4 border border-gray-300 rounded-lg focus:ring-lounge-accent focus:border-lounge-accent transition duration-150"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-lounge-primary text-white font-bold py-4 rounded-full hover:bg-lounge-dark transition duration-300 shadow-lg transform hover:scale-[1.01]">
                        Kirim Pesan Sekarang
                    </button>
                </form>
            </div>

        </div>
    </section>

    <!-- 7. Footer -->
    <footer class="bg-lounge-dark text-gray-400 py-12">
        <div class="container mx-auto px-6 lg:px-12 grid md:grid-cols-4 gap-10">
            <!-- Footer Column 1: About -->
            <div>
                <h3 class="text-2xl font-serif font-bold text-lounge-accent mb-4">UMKM Lounge</h3>
                <p class="text-sm">UMKM Kita.</p>
            </div>

            <!-- Footer Column 2: Links -->
            <div>
                <h3 class="text-lg font-semibold text-white mb-4 border-b border-gray-700 pb-1">Navigasi Cepat</h3>
                <ul class="space-y-3 text-sm">
                    <li><a href="#home" class="hover:text-lounge-accent transition">Beranda</a></li>
                    <li><a href="#menu" class="hover:text-lounge-accent transition">Menu Lengkap</a></li>
                    <li><a href="#about" class="hover:text-lounge-accent transition">Tentang Kami</a></li>
                    <li><a href="#contact" class="hover:text-lounge-accent transition">Reservasi</a></li>
                </ul>
            </div>

            <!-- Footer Column 3: Dashboard Link -->
            <div>
                <h3 class="text-lg font-semibold text-white mb-4 border-b border-gray-700 pb-1">Area Admin</h3>
                <ul class="space-y-3 text-sm">
                    <li><a href="{{ route('umkm.index') }}" class="text-lounge-accent font-bold hover:text-white transition flex items-center">
                        <i data-lucide="log-in" class="w-4 h-4 mr-2"></i> Akses Dashboard
                    </a></li>
                </ul>
            </div>

            <!-- Footer Column 4: Social Media -->
            <div>
                <h3 class="text-lg font-semibold text-white mb-4 border-b border-gray-700 pb-1">Ikuti Kami</h3>
                <div class="flex space-x-4">
                    <a href="#" class="text-white hover:text-lounge-accent transition p-2 bg-lounge-primary rounded-full"><i data-lucide="instagram" class="w-5 h-5"></i></a>
                    <a href="#" class="text-white hover:text-lounge-accent transition p-2 bg-lounge-primary rounded-full"><i data-lucide="facebook" class="w-5 h-5"></i></a>
                    <a href="#" class="text-white hover:text-lounge-accent transition p-2 bg-lounge-primary rounded-full"><i data-lucide="twitter" class="w-5 h-5"></i></a>
                </div>
            </div>
        </div>

        <div class="border-t border-gray-800 mt-10 pt-6 text-center text-sm text-gray-500">
            &copy; 2024 UMKM. All Rights Reserved.
        </div>
    </footer>

    <!-- JavaScript untuk Toggles & Icons -->
    <script>
        // Inisialisasi Lucide Icons
        lucide.createIcons();

        // Fungsi untuk mengaktifkan/menonaktifkan menu mobile
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            if (menu.classList.contains('translate-x-full')) {
                menu.classList.remove('translate-x-full');
                menu.classList.add('translate-x-0');
            } else {
                menu.classList.remove('translate-x-0');
                menu.classList.add('translate-x-full');
            }
        }
    </script>
</body>

</html>
