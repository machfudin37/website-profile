<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaKegiatanVideo extends Model
{
    use HasFactory;
    protected $table = 'beritakegiatanvideo';
    protected $primaryKey = 'id';
    protected $fillable = [
        'judul',
        'keterangan',
        'bagian',
        'video',
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
