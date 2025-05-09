<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Kontak'
        ];
        return view('tentang.kontak.index', $data);
    }
    public function kirim(Request $request)
    {
        try {
            // Validasi data input
            $request->validate([
                'nama' => 'required|regex:/^[a-zA-Z\s]+$/|max:255',
                'email' => 'required|email|max:255',
                'subject' => 'required|string|max:255',
                'message' => 'required|string',
            ], [
                'nama.required' => 'Nama tidak boleh kosong.',
                'nama.regex' => 'Nama hanya boleh berisi huruf dan spasi.',
                'email.required' => 'Email tidak boleh kosong.',
                'email.email' => 'Format email tidak valid.',
                'email.max' => 'Panjang email tidak boleh lebih dari 255 karakter.',
                'subject.required' => 'Subject tidak boleh kosong.',
                'subject.string' => 'Subject harus berupa teks.',
                'subject.max' => 'Panjang subject tidak boleh lebih dari 255 karakter.',
                'message.required' => 'Message tidak boleh kosong.',
                'message.string' => 'Message harus berupa teks.',
            ]);

            // Simpan data ke dalam model
            $kontak = new Kontak();
            $kontak->nama = $request->input('nama');
            $kontak->email = $request->input('email');
            $kontak->subject = $request->input('subject');
            $kontak->message = $request->input('message');

            // Simpan ke database
            $kontak->save();

            return redirect()->route('kontak.index')->with('success', 'Pesan Berhasil Terkirim');
        } catch (\Exception $e) {
            return redirect()->route('kontak.index')->with('error', 'Pesan Gagal Terkirim: ' . $e->getMessage());
        }
    }
}
