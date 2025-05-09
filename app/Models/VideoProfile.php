<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoProfile extends Model
{
    use HasFactory;
    protected $table = 'videoprofile';
    protected $primaryKey = 'id';
    protected $fillable = [
        'video',
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
