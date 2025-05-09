<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Map;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index($id)
    {
        $data = [
            'title' => 'Admin Map',
            'map' => Map::findOrFail($id),
        ];
        return view('admin.map.index', $data);
    }
    public function ubah(Request $request, $id)
    {
        try {

            $request->validate([
                'lokasi' => 'required|string|regex:/^<iframe.*<\/iframe>$/',
            ], [
                'lokasi.required' => 'Kolom lokasi tidak boleh kosong.',
                'lokasi.string' => 'Kolom lokasi harus berupa Embed Google Maps.',
                'lokasi.regex' => 'Kolom lokasi harus berupa Embed Google Maps.',
            ]);

            $map = Map::findOrFail($id);
            $map->update([
                'lokasi' => $request->lokasi,
            ]);

            return redirect()->route('admin.map.index', ['id' => 1])->with('success', 'Map berhasil diubah.');
        } catch (\Exception $e) {
            return redirect()->route('admin.map.index', ['id' => 1])->with('error', 'Map Gagal diubah :' . $e->getMessage());
        }
    }
}
