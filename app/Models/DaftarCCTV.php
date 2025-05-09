<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarCCTV extends Model
{
    use HasFactory;
    protected $table = 'daftarcctv';
    protected $primaryKey = 'id';
    protected $fillable = [
        'judul',
        'body',
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
