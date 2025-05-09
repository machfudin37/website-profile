<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SistemInformasiSiberdanSandi extends Model
{
    use HasFactory;
    protected $table = 'sisteminformasisiberdansandi';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_bagian',
        'judul',
        'sub_judul',
        'judul_isi',
        'foto',
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
