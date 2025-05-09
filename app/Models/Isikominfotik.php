<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Isikominfotik extends Model
{
    use HasFactory;
    protected $table = 'isikominfotik';
    protected $primaryKey = 'id';
    protected $fillable = [
        'isi',
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
