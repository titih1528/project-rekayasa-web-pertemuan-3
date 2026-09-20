<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'nama' => 'Titi Haryanti',
            'nim' => '251011701045',
            'prodi' => 'Sistem Informasi',
            'kampus' => 'Universitas Pamulang',
            'email' => 'titih1528@gmail.com',
            'status' => 'Aktif',
        ];

        return view('mahasiswa', compact('mahasiswa'));
    }
}