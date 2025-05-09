<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriPegawai extends Model
{
    use HasFactory;
    protected $table = 'galeripegawai';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
        'bagian',
        'status',
        'foto',
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
