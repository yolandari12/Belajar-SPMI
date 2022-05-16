<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KerjaSamaPendidikan extends Model
{
    // use HasFactory;

    use SoftDeletes;

    protected $table = 'kerjasama_pendidikan';

    protected $fillable = [
        'lembaga_mitra', 'tingkat', 'judul_kegiatan_PS', 'manfaat',
        'waktu_durasi', 'bukti_kerjasama', 'tahun'
    ];
}
