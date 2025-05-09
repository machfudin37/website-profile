<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenagaAhli extends Model
{
    use HasFactory;
    protected $table = 'tenaga_ahli';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
        'seksi',
        'bidang',
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
