<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VideoProfile;
use Illuminate\Http\Request;

class VideoProfileController extends Controller
{
    public function index($id)
    {
        $data = [
            'title' => 'Admin Video Profile',
            'videoprofile' => VideoProfile::findOrFail($id),
        ];
        return view('admin.profile.videoprofile.index', $data);
    }
    public function ubahvideo(Request $request, $id)
    {
        try {
            $videoprofile = VideoProfile::findOrFail($id);

            $request->validate([
                'video' => 'required|mimes:mp4,mov,avi|max:102400',
            ], [
                'video.required' => 'Video wajib diunggah.',
                'video.mimes' => 'Format video tidak valid. Pilih format mp4, mov, atau avi.',
                'video.max' => 'Ukuran video tidak boleh lebih dari 100 MB.',
            ]);

            if ($request->hasFile('video')) {
                $file = $request->file('video');
                $originalFileName = $file->getClientOriginalName(); // Mendapatkan nama asli file
                $file->move(public_path('assets/videoprofile'), $originalFileName); // Simpan file ke dalam direktori public
                $video = $originalFileName;

                // Hapus file lama jika ada
                if ($videoprofile->video && file_exists(public_path('assets/videoprofile/' . $videoprofile->video))) {
                    unlink(public_path('assets/videoprofile/' . $videoprofile->video));
                }

                $videoprofile->video = $video;
                $videoprofile->save();

                return redirect()->route('admin.videoprofile.index', ['id' => 1])->with('success', 'Video Profile Berhasil diubah.');
            }
        } catch (\Exception $e) {
            return redirect()->route('admin.videoprofile.index', ['id' => 1])->with('error', 'Video Profile Gagal diubah : ' . $e->getMessage());
        }
    }
}
