<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IsiTataUsaha extends Model
{
    use HasFactory;
    protected $table = 'isitatausaha';
    protected $primaryKey = 'id';
    protected $fillable = [
        'isi',
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
