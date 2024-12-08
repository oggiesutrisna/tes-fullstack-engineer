<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        return Buku::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_buku' => ['required'],
            'kategori_id' => ['required', 'exists:kategoris'],
            'pengarang_id' => ['required', 'exists:pengarangs'],
            'tahun' => ['required'],
        ]);

        Buku::create($data);
        return response()->json($data, 201);
    }

    public function show(Buku $buku)
    {
        return $buku;
    }

    public function update(Request $request, Buku $buku)
    {
        $data = $request->validate([
            'nama_buku' => ['required'],
            'kategori_id' => ['required', 'exists:kategoris'],
            'pengarang_id' => ['required', 'exists:pengarangs'],
            'tahun' => ['required'],
        ]);

        $buku->update($data);

        return response()->json($buku);
    }

    public function destroy(Buku $buku)
    {
        $buku->delete();

        return response()->json(null, 204);
    }
}
