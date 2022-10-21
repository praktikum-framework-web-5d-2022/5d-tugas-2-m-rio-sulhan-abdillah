<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\DosenEloquent;


class DosenController

{
    public function index()
    {
        $dsn = DosenEloquent::all();
        return view('DosenEloqORM', ['data' => $dsn], ['title' => 'Dosen']);
    }
    public function insert()
    {
        DosenEloquent::create([
            'nidn' => '1001',
            'nama' => 'Liam Ferdie',
            'jenis_kelamin' => 'Laki Laki',
            'alamat' => 'Karawang',
            'tempat_lahir' => 'Karawang',
            'tanggal_lahir' => '1991-08-07',
            'photo' => 'Cikarang Meikarta',
        ]);
        return "Berhasil disimpan";
    }
    public function delete()
    {
        $dsn = DosenEloquent::where('nama', 'Kirana')->delete();
        return "Berhasil dihapus";
    }
    public function update()
    {
        $dsn = DosenEloquent::where('id', 5)->first()->update([
            'nama' => 'Ojan'
        ]);
        return "Berhasil diupdate";
    }
}
