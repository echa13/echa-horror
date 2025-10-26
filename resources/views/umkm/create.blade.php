@extends('layouts.guest.app')
@section('content')
            {{-- Start main content --}}
            <main class="p-8 flex-grow">
                <div class="text-sm text-gray-500 mb-6">
                    <a href="{{ route('umkm.index') }}" class="hover:text-blue-900 transition">Dashboard</a> /
                    <span class="text-blue-900 font-medium">Tambah UMKM</span>
                </div>

                <div class="max-w-4xl mx-auto">
                    {{-- Pesan error --}}
                    @if ($errors->any())
                        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-100 border border-red-300">
                            <strong>Terjadi kesalahan!</strong>
                            <ul class="list-disc list-inside mt-1">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- Pesan sukses --}}
                    @if (session('success'))
                        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-100 border border-green-300">
                            <i data-lucide="check-circle" class="w-5 h-5 mr-2 inline-block"></i>
                            {{ session('success') }}
                        </div>
                    @endif

                    {{-- FORM CARD --}}
                    <div class="bg-white p-8 rounded-2xl shadow-md border border-gray-100">
                        <h3 class="text-xl font-bold mb-6 text-gray-700 border-b pb-3">Formulir UMKM</h3>

                        <form action="{{ route('umkm.store') }}" method="POST">
                            @csrf
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm mb-1 font-medium text-gray-700">Nama Usaha <span
                                            class="text-red-500">*</span></label>
                                    <input type="text" name="nama_usaha"
                                        class="w-full border border-gray-300 rounded-lg px-4 py-2"
                                        value="{{ old('nama_usaha') }}" required>

                                    <label class="block text-sm mt-4 mb-1 font-medium text-gray-700">Nama
                                        Pemilik</label>
                                    <input type="text" name="pemilik_nama"
                                        class="w-full border border-gray-300 rounded-lg px-4 py-2"
                                        value="{{ old('pemilik_nama') }}">

                                    <label class="block text-sm mt-4 mb-1 font-medium text-gray-700">Kategori
                                        Usaha</label>
                                    <input type="text" name="kategori"
                                        class="w-full border border-gray-300 rounded-lg px-4 py-2"
                                        value="{{ old('kategori') }}">
                                </div>

                                <div>
                                    <label class="block text-sm mb-1 font-medium text-gray-700">Alamat Lengkap</label>
                                    <textarea name="alamat" class="w-full border border-gray-300 rounded-lg px-4 py-2" rows="1">{{ old('alamat') }}</textarea>

                                    <div class="grid grid-cols-2 gap-2 mt-2">
                                        <div>
                                            <label class="block text-sm mb-1 font-medium text-gray-700">RT</label>
                                            <input type="text" name="rt"
                                                class="w-full border border-gray-300 rounded-lg px-4 py-2"
                                                value="{{ old('rt') }}">
                                        </div>
                                        <div>
                                            <label class="block text-sm mb-1 font-medium text-gray-700">RW</label>
                                            <input type="text" name="rw"
                                                class="w-full border border-gray-300 rounded-lg px-4 py-2"
                                                value="{{ old('rw') }}">
                                        </div>
                                    </div>

                                    <label class="block text-sm mt-4 mb-1 font-medium text-gray-700">Deskripsi
                                        Usaha</label>
                                    <textarea name="deskripsi" class="w-full border border-gray-300 rounded-lg px-4 py-2" rows="2">{{ old('deskripsi') }}</textarea>
                                </div>
                            </div>

                            <div class="mt-8 text-center">
                                <button type="submit"
                                    class="btn-primary bg-blue-900 hover:bg-blue-900 text-white font-semibold py-2 px-4 rounded-lg transition-all">
                                    <i data-lucide="save" class="w-5 h-5 mr-2 inline-block"></i>
                                    Simpan
                                </button>
                                <a href="{{ route('umkm.index') }}"
                                    class="btn-secondary bg-gray-200 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-lg ml-3">
                                    Batal
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
            {{-- End main content --}}
@endsection
