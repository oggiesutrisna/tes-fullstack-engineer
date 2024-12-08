<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        return Kategori::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_kategori' => ['required'],
        ]);

        Kategori::create($data);
        return response()->json($data);
    }

    public function show(Kategori $kategori)
    {
        return $kategori;
    }

    public function update(Request $request, Kategori $kategori)
    {
        $data = $request->validate([
            'nama_kategori' => ['required'],
        ]);

        $kategori->update($data);

        return response()->json($data);
    }

    public function destroy(Kategori $kategori)
    {
        $kategori->delete();

        return response()->json(null, 204);
    }
}
