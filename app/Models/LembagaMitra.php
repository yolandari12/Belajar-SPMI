<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LembagaMitra extends Model
{
    // use HasFactory;

    use SoftDeletes;

    protected $table = 'lembaga_mitra';

    protected $dates = [
        'waktu_dan_durasi',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'lembaga_mitra', 'tingkat', 'judul_kegiatan_kerja_sama',
        'manfaat_bagi_yang_diakterditasi', 'waktu', 'durasi', 'bukti_kerjasama',
        'tahun_berakhirnya_kerjasama', 'created_at', 'updated_at', 'deleted_at'
    ];

}
