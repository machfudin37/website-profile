<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawai';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
        'nip',
        'golongan',
        'jabatan',
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
