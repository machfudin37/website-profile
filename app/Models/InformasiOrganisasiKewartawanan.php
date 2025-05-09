<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiOrganisasiKewartawanan extends Model
{
    use HasFactory;
    protected $table = 'organisasi_kewartawanan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'body'
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
