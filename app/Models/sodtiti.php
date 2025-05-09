<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sodtiti extends Model
{
    use HasFactory;
    protected $table = 'sodtiti';
    protected $primaryKey = 'id';
    protected $fillable = [
        'judul',
        'gambar',
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
