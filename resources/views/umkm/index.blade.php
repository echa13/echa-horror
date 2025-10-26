<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar UMKM | Dashboard</title>

    <!-- Font & Tailwind -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>

    {{-- ===== CSS AREA (Diadaptasi dari Halaman Create) ===== --}}
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #fdfdfe;
        }
        /* Sidebar Styling */
        .sidebar {
            background: linear-gradient(180deg, #7697b5 0%, #2a363d 100%);
            box-shadow: 4px 0 15px rgba(152, 86, 86, 0.08);
        }
        .sidebar a {
            transition: all 0.25s ease-in-out;
        }
        .sidebar a:hover {
            background: rgba(255,255,255,0.12);
            transform: translateX(4px);
        }
        .sidebar a.active {
            background: rgba(255,255,255,0.18);
            font-weight: 600;
        }
        .sidebar .bottom-link {
            margin-top: auto;
            padding-bottom: 2rem;
        }
        /* Card & Table Styling */
        .card-table {
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(200, 203, 208, 0.05);
        }
        .styled-table th {
            background-color: #2a394f !important; /* Indigo primary color */
            color: rgb(253, 252, 252) !important;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.75rem;
        }
        .styled-table td {
            font-size: 0.875rem;
            padding: 1rem 0.75rem;
        }
        .styled-table tbody tr:nth-child(odd) {
            background-color: #ffffff;
        }
        .styled-table tbody tr:hover {
            background-color: #e7e9f1;
        }
        /* Delete Button Confirmation Style */
        .btn-delete-confirm {
            transition: all 0.2s ease;
        }
        .btn-delete-confirm:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 10px rgba(53, 92, 171, 0.5);
        }
    </style>
</head>
<body>

<div class="flex min-h-screen">

    {{--Start sidebar--}}
    <aside class="sidebar w-64 fixed flex flex-col justify-between text-white h-screen z-20">
        <div>
            <!-- Logo & Title -->
            <div class="flex items-center justify-center py-6 border-b border-indigo-400/30">
                <i data-lucide="store" class="w-6 h-6 mr-2 text-indigo-100"></i>
                <h4 class="text-xl font-extrabold tracking-wide">UMKM</h4>
            </div>

            <!-- Navigation -->
            <nav class="mt-6 px-4 space-y-2 text-sm font-medium">
                <a href="{{ route('umkm.index') }}" class="active flex items-center px-4 py-3 rounded-lg">
                    <i data-lucide="layout-dashboard" class="w-5 h-5 mr-3"></i> Dashboard
                </a>
                <a href="{{ route('umkm.create') }}" class="flex items-center px-4 py-3 rounded-lg hover:bg-indigo-700/50">
                    <i data-lucide="square-user-round" class="w-5 h-5 mr-3"></i> User
                </a>
                <a href="#" class="flex items-center px-4 py-3 rounded-lg hover:bg-indigo-700/50">
                    <i data-lucide="settings" class="w-5 h-5 mr-3"></i> Pengaturan
                </a>
            </nav>
        </div>

        <!-- Logout (bottom aligned) -->
        <div class="bottom-link px-4">
            <a href="#" class="flex items-center px-4 py-3 rounded-lg hover:bg-indigo-700/40 transition-all">
                <i data-lucide="log-out" class="w-5 h-5 mr-3"></i> Logout
            </a>
        </div>
    </aside>
     {{--End sidebar--}}

    <!-- ===== MAIN AREA (Diatur untuk mengimbangi sidebar) ===== -->
    <div class="flex-1 ml-64 flex flex-col">

        <!-- HEADER (Diadaptasi dari Halaman Create) -->
        <header class="bg-white shadow-sm p-5 sticky top-0 z-10 flex justify-between items-center border-b border-gray-200">
            <h1 class="text-lg font-semibold text-gray-800 tracking-tight">Daftar Data UMKM</h1>
            <div class="flex items-center text-gray-600">
                <span class="mr-2 font-medium">Halo !</span>
                <i data-lucide="circle-user" class="w-6 h-6"></i>
            </div>
        </header>

        <!-- CONTENT -->
        <main class="p-8 flex-grow">
            <!-- Breadcrumb -->
            <div class="text-sm text-gray-500 mb-6">
                <span class="text-blue-950 font-medium">Dashboard</span> /
                <span class="text-gray-500">Daftar UMKM</span>
            </div>

            {{-- Pesan sukses (Styled with Tailwind) --}}
            @if (session('success'))
                <div class="p-4 mb-6 text-sm text-blue-800 rounded-lg bg-blue-100 border border-blue-300 shadow-md">
                    <i data-lucide="check-circle" class="w-5 h-5 mr-2 inline-block align-text-bottom"></i>
                    {{ session('success') }}
                </div>
            @endif

            <!-- Header dan Tombol Tambah (Menggunakan struktur yang direferensikan) -->
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Data Daftar UMKM</h2>
                <!-- Menggunakan route() dan style Tailwind -->
                <a href="{{ route('umkm.create') }}" class="flex items-center bg-blue-950 hover:bg-blue-950 text-white font-medium py-2 px-1 rounded-lg transition duration-100 shadow-md">
                    <i data-lucide="plus-circle" class="w-5 h-5 mr-2"></i> Tambah Baru
                </a>
            </div>

            {{-- Tabel UMKM (Styled with Tailwind) --}}
            <div class="bg-white p-2 card-table">
                <div class="overflow-x-auto">
                    <table class="styled-table w-full border-collapse">
                        <thead class="text-center">
                            <tr>
                                <th class="p-2 border-r border-blue-700">No</th>
                                <th class="p-2 border-r border-blue-700">Nama Usaha</th>
                                <th class="p-2 border-r border-blue-700">Pemilik</th>
                                <th class="p-2 border-r border-blue-700">Alamat</th>
                                <th class="p-2">RT/RW</th>
                                <th class="p-2 border-r border-blue-700">Kategori</th>
                                <th class="p-2 border-r border-blue-700">Kontak</th>
                                <th class="p-2 border-r border-blue-700">Deskripsi</th>
                                <th class="p-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($umkms as $index => $umkm)
                                <tr>
                                    <td class="text-center">{{ $index + 1 }}</td>
                                    <td>{{ $umkm->nama_usaha }}</td>
                                    <td>{{ $umkm->pemilik_nama }}</td>
                                    <td>{{ $umkm->alamat }}</td>
                                    <td class="text-center">{{ $umkm->rt ?? '-' }}/{{ $umkm->rw ?? '-' }}</td>
                                    <td>{{ $umkm->kategori }}</td>
                                    <td>{{ $umkm->kontak ?? '-' }}</td>
                                    <td>{{ $umkm->deskripsi ?? '-' }}</td>
                                    <td class="text-center whitespace-nowrap">
                                        {{-- Edit Button dengan Lucide Icon --}}
                                        <a href="{{ route('umkm.edit', $umkm->umkm_id) }}"
                                           class="inline-flex items-center justify-center p-2 text-white bg-blue-900 rounded-md shadow-md hover:bg-blue-900 transition duration-150 mr-1">
                                            <i data-lucide="pencil" class="w-4 h-4"></i>
                                        </a>

                                        {{-- Delete Form dengan Lucide Icon --}}
                                        <form action="{{ route('umkm.destroy', $umkm->umkm_id) }}" method="POST" class="d-inline inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                    class="btn-delete-confirm inline-flex items-center justify-center p-2 text-white bg-red-900 rounded-md shadow-md hover:bg-red-700"
                                                    onclick="return confirm('Yakin ingin menghapus UMKM {{ $umkm->nama_usaha }}?')">
                                                <i data-lucide="trash-2" class="w-4 h-4"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="text-center text-muted p-4 italic text-gray-500">Belum ada data UMKM yang tersimpan.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </main>

        <!-- FOOTER (Diadaptasi dari Halaman Create) -->
        <footer class="bg-white border-t border-gray-200 text-center py-4 text-sm text-gray-500">
            &copy; {{ date('Y') }} UMKM Dashboard .
        </footer>

    </div>
</div>

<!-- Lucide Icons -->
<script>
    // Memastikan ikon Lucide di-render setelah DOM dimuat
    lucide.createIcons();
</script>

</body>
</html>
