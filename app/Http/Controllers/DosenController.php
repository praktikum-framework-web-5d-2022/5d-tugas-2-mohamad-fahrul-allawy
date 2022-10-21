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
            'nama' => 'Johan Sundstein',
            'jenis_kelamin' => 'Laki-Laki',
            'alamat' => 'Karawang',
            'tempat_lahir' => 'Karawang',
            'tanggal_lahir' => '1994-08-10',
            'photo' => 'Karawang',
        ]);
        return "Berhasil disimpan";
    }
    public function delete()
    {
        $dsn = DosenEloquent::where('nama', 'Johan Sundstein')->delete();
        return "Berhasil dihapus";
    }
    public function update()
    {
        $dsn = DosenEloquent::where('id', 1)->first()->update([
            'nama' => 'Sebastien Debs'
        ]);
        return "Berhasil diupdate";
    }
}