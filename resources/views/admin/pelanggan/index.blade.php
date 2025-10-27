@extends('layouts.admin.app')

 @section('content')
    {{-- start main content --}}

            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0">
                    <h1 class="h4">Tambah Pelanggan</h1>
                    <p class="mb-0">Form Untuk Menambah Pelanggan Baru</p>
                </div>
                <div>
                    <a href="{{ route('pelanggan.create') }}" class="btn btn-success text-white">
                        Tambah Pelanggan
                    </a>
                </div>
            </div>
        </div>
    {{-- end main content --}}
 @endsection
