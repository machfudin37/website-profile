<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugasdanfungsikominfotik extends Model
{
    use HasFactory;
    protected $table = 'tugasdanfungsikominfotik';
    protected $primaryKey = 'id';
    protected $fillable = [
        'judul',
        'sub_judul',
        'judul_isi',
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
