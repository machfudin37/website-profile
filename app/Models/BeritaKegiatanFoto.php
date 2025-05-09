<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaKegiatanFoto extends Model
{
    use HasFactory;
    protected $table = 'beritakegiatanfoto';
    protected $primaryKey = 'id';
    protected $fillable = [
        'judul',
        'keterangan',
        'gambar',
        'bagian',
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
