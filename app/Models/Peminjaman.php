<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Peminjaman extends Model
{
    protected $table = 'peminjaman';

    protected $fillable = [
        'pegawai_id',
        'ruang_id',
        'tanggal',
        'jam_mulai',
        'jam_akhir',
        'keterangan',
    ];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }

    public function ruang()
    {
        return $this->belongsTo(Ruang::class);
    }

}
