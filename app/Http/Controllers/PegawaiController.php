<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Fitur unik: aksi khusus untuk Pegawai
     */
    public function aksiKhusus(Request $request)
    {
        // Set pesan flash ke session
        $request->session()->flash('pesan_aksi', 'Aksi khusus berhasil dijalankan!');
        return redirect('/Pegawai');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Data contoh
        $name = "Ivana Azra";
        $birth_date_string = "2007-05-31"; // Format string YYYY-MM-DD
        $tgl_harus_wisuda_string = "2027-10-30"; // Format string YYYY-MM-DD
        $current_semester = 4; // contoh semester saat ini

        // Mengubah string tanggal menjadi objek DateTime
        $birth_date = date_create($birth_date_string);
        $tgl_harus_wisuda = date_create($tgl_harus_wisuda_string);
        $now = date_create('now');

        // Hitung umur
        $umur_obj = date_diff($birth_date, $now);
        $my_age = $umur_obj->y;

        // Hitung jarak hari ke tanggal wisuda
        $diff_wisuda = date_diff($now, $tgl_harus_wisuda);
        $time_to_study_left = $diff_wisuda->days;

        // Tentukan pesan semester
        $semester_message = $current_semester < 3
            ? "Masih Awal, Kejar TAK"
            : "Jangan main-main, kurang-kurangi main game!";

        // Buat array data
        $data = [
            'name' => $name,
            'my_age' => $my_age,
            'hobbies' => [
                'Membaca',
                'Menulis',
                'Bermain Musik',
                'Olahraga',
                'Traveling'
            ],
            'tgl_harus_wisuda' => date_format($tgl_harus_wisuda, 'Y-m-d'),
            'time_to_study_left' => $time_to_study_left,
            'current_semester' => $current_semester,
            'semester_message' => $semester_message,
            'future_goal' => 'Menjadi Data Scientist handal'
        ];

        // kirim data ke view pegawai.blade.php
        return view('pegawai', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
