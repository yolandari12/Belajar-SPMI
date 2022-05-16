<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StrategiKunci extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'strategikunci';
    protected $villable = [
        'tahun', 'strategi_kunci', 'tahun_mulai', 'deleted_at', 'tahun_akhir'
    ];
}
