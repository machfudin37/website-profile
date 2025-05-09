<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiKeuangan extends Model
{
    use HasFactory;
    protected $table = 'informasi_keuangan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'sub_menu',
        'pdf',
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
