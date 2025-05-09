<?php

namespace App\Http\Controllers;

use App\Models\Map;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index($id)
    {
        $data = [
            'title' => 'Map',
            'map' => Map::findOrFail($id),
        ];
        return view('tentang.map.index', $data);
    }
}
