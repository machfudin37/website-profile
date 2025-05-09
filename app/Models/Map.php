<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    use HasFactory;
    protected $table = 'map';
    protected $primaryKey = 'id';
    protected $fillable = [
        'lokasi'
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
