<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'nim' => '251011701045',
            'nama' => 'Titi Haryanti',
            'prodi' => 'Sistem Informasi',
            'kampus' => 'Universitas Pamulang',
            'email' => 'titih1528@gmail.com',
            'status' => 'Aktif',
        ];

        return view('page.profile', compact('mahasiswa'));
    }
}