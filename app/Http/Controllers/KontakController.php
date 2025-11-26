<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        return view('kontak');
    }

    public function store(Request $request)
    {
        // Validasi sesuai modul
        $validatedData = $request->validate([
            'nama' => 'required|min:3|max:50',
            'pesan' => 'required|min:10',
        ]);

        // Jika ingin menampilkan hasil validasi saja (sesuai modul awal)
        // return "Nama: " . $validatedData['nama'] . " | Pesan: " . $validatedData['pesan'];

        // Dengan pesan sukses (lanjutan modul)
        return redirect('/kontak')->with('success', 'Pesan Anda berhasil dikirim!');
    }
}
