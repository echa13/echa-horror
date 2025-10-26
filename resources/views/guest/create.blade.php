@extends('layouts.guest.app')

@section('content')
    <!-- KONTEN UTAMA -->
    <div class="w-full px-6 py-6 mx-auto bg-gray-100 min-h-screen">

        <div class="flex flex-wrap -mx-3 justify-center">
            <div class="w-full max-w-2xl px-3 sm:flex-none">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white shadow-2xl dark:bg-slate-800 dark:shadow-lg rounded-2xl bg-clip-border border border-blue-200 dark:border-slate-700">
                    <div class="flex-auto p-8">
                        <div class="flex justify-between items-center mb-6 border-b pb-3 border-gray-200 dark:border-slate-700">
                            <h5 class="text-lg font-bold text-blue-700 dark:text-white">📝 Form Input User</h5>
                            <!-- Link ke Daftar User -->
                            <a href="{{ route('user.index') }}"
                               class="text-sm font-semibold text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300 flex items-center transition">
                                <i class="fa fa-list-alt text-lg mr-1"></i>
                                <span>Daftar User</span>
                            </a>
                        </div>

                        <!-- Form Store User -->
                        <form action="{{ route('user.store') }}" method="POST">
                            @csrf

                            <!-- Nama Lengkap -->
                            <div class="mb-5">
                                <label for="name"
                                    class="block mb-2 text-sm font-semibold text-slate-700 dark:text-white">Nama Lengkap</label>
                                <input type="text" name="name" id="name" value="{{ old('name') }}"
                                    class="text-sm w-full rounded-lg border border-blue-300 dark:border-slate-600 bg-white dark:bg-slate-900 text-gray-800 dark:text-white py-2.5 px-3 placeholder:text-gray-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-300 transition"
                                    placeholder="Contoh: Echa" required>
                                @error('name')
                                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div class="mb-5">
                                <label for="email"
                                    class="block mb-2 text-sm font-semibold text-slate-700 dark:text-white">Email</label>
                                <input type="email" name="email" id="email" value="{{ old('email') }}"
                                    class="text-sm w-full rounded-lg border border-blue-300 dark:border-slate-600 bg-white dark:bg-slate-900 text-gray-800 dark:text-white py-2.5 px-3 placeholder:text-gray-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-300 transition"
                                    placeholder="Contoh: echa@example.com" required>
                                @error('email')
                                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Password Fields -->
                            <div class="flex flex-wrap -mx-3">
                                <!-- Password -->
                                <div class="w-full md:w-1/2 px-3 mb-5">
                                    <label for="password"
                                        class="block mb-2 text-sm font-semibold text-slate-700 dark:text-white">Password</label>
                                    <input type="password" name="password" id="password"
                                        class="text-sm w-full rounded-lg border border-blue-300 dark:border-slate-600 bg-white dark:bg-slate-900 text-gray-800 dark:text-white py-2.5 px-3 placeholder:text-gray-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-300 transition"
                                        placeholder="Masukkan password" required>
                                    @error('password')
                                        <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Konfirmasi Password -->
                                <div class="w-full md:w-1/2 px-3 mb-5">
                                    <label for="password_confirmation"
                                        class="block mb-2 text-sm font-semibold text-slate-700 dark:text-white">Konfirmasi Password</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                        class="text-sm w-full rounded-lg border border-blue-300 dark:border-slate-600 bg-white dark:bg-slate-900 text-gray-800 dark:text-white py-2.5 px-3 placeholder:text-gray-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-300 transition"
                                        placeholder="Ulangi password" required>
                                </div>
                            </div>

                            <!-- Tombol Aksi -->
                            <div class="flex justify-end mt-6 space-x-3">
                                <a href="{{ route('user.index') }}"
                                    class="px-6 py-2.5 text-xs font-bold text-slate-700 bg-gray-200 hover:bg-gray-300 dark:bg-slate-700 dark:text-white dark:hover:bg-slate-600 rounded-lg shadow-md transition">
                                    Batal
                                </a>
                                <button type="submit"
                                    class="px-6 py-2.5 text-xs font-bold text-white bg-blue-600 hover:bg-blue-700 rounded-lg shadow-md transition">
                                    Simpan User
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- AKHIR KONTEN UTAMA -->
@endsection
