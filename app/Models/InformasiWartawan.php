<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiWartawan extends Model
{
    use HasFactory;
    protected $table = 'wartawan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
        'jenis_media',
        'media',
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
