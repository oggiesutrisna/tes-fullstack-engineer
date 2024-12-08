<?php

namespace App\Http\Controllers;

use App\Models\Pengarang;
use Illuminate\Http\Request;

class PengarangController extends Controller
{
    public function index()
    {
        return Pengarang::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_pengarang' => ['required'],
        ]);

        Pengarang::create($data);
        return response()->json($data);
    }

    public function show(Pengarang $pengarang)
    {
        return $pengarang;
    }

    public function update(Request $request, Pengarang $pengarang)
    {
        $data = $request->validate([
            'nama_pengarang' => ['required'],
        ]);

        $pengarang->update($data);

        return $pengarang;
    }

    public function destroy(Pengarang $pengarang)
    {
        $pengarang->delete();

        return response()->json(null, 204);
    }
}
