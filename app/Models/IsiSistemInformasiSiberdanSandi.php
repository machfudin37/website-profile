<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IsiSistemInformasiSiberdanSandi extends Model
{
    use HasFactory;
    protected $table = 'isisisteminformasisiberdansandi';
    protected $primaryKey = 'id';
    protected $fillable = [
        'isi',
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
