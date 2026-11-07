<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login(){
        return view('login');
    }

    public function tologin(Request $request){
        $username = $request->input('username');
        $password = $request->input('password');

        if (empty($username)) {
            return redirect()->route('login')->with('error', 'Username tidak boleh kosong!');
        }
        
        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function dashboard(Request $request){
        $username = $request->query('username', 'Mahasiswa');

         $statistik = [
            ['label' => 'Total Mata Kuliah', 'nilai' => 6,  'warna' => 'primary', 'icon' => '📚'],
            ['label' => 'Total SKS',          'nilai' => 20, 'warna' => 'success', 'icon' => '🎯'],
            ['label' => 'Hari Kuliah',        'nilai' => 5,  'warna' => 'warning', 'icon' => '📅'],
        ];
        $mata_kuliah = $this->getMataKuliahData();
        
        return view('dashboard', compact('username', 'statistik', 'mata_kuliah'));
    }

       private function getMataKuliahData()
    {
        return [
            ['nama' => 'Pemrograman Dasar', 'sks' => 3, 'dosen' => 'Heri S.Kom','ruang'=>'A.3.1', 'hari'=>'Senin', 'jam'=>'08.00-10.00'],
            ['nama' => 'Struktur Data', 'sks' => 4, 'dosen' => 'Dewi S.Kom','ruang'=>'A.3.2', 'hari'=>'Selasa', 'jam'=>'10.00-12.00'],
            ['nama' => 'Basis Data', 'sks' => 3, 'dosen' => 'Andi S.Kom','ruang'=>'A.3.3', 'hari'=>'Rabu', 'jam'=>'14.00-16.00'],
            ['nama' => 'Jaringan Komputer', 'sks' => 3, 'dosen' => 'Budi S.Kom','ruang'=>'A.3.4', 'hari'=>'Kamis', 'jam'=>'08.00-10.00'],
            ['nama' => 'Sistem Operasi', 'sks' => 4, 'dosen' => 'Citra S.Kom','ruang'=>'A.3.5', 'hari'=>'Jumat', 'jam'=>'10.00-12.00'],
            ['nama' => 'Rekayasa Perangkat Lunak', 'sks' => 3, 'dosen' => 'Dina S.Kom','ruang'=>'A.3.6', 'hari'=>'Sabtu', 'jam'=>'08.00-10.00'],
        ];
    }

    public function pengelolaan(Request $request){
        $username = $request->query('username', 'Mahasiswa');

        $mata_kuliah = $this->getMataKuliahData();

        return view('pengelolaan', compact('username', 'mata_kuliah'));
    }

    public function profil(Request $request){
         $username = $request->query('username', 'Mahasiswa');

        $profil = [
            ['label' => 'Nama',     'nilai' => $username],
            ['label' => 'NIM',      'nilai' => '2024' . rand(1000, 9999)],
            ['label' => 'Jurusan',  'nilai' => 'Teknik Informatika'],
            ['label' => 'Semester', 'nilai' => '3'],
            ['label' => 'IPK',      'nilai' => '3.75'],
            ['label' => 'Email',    'nilai' => strtolower(str_replace(' ', '.', $username)) . '@mahasiswa.ac.id'],
        ];

        return view('profil', compact('username', 'profil'));
    }
}
