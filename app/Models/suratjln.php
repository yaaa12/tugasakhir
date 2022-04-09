<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suratjln extends Model
{
    use HasFactory;
    protected $fillable = [
        'no_suratjln',
        'tanggal_kirim',
        'Pelanggan',
        'nama_bibit',
        'jumlah_bibit',
        'satuan',
        'tanggal_diterima',
        'keterangan'
    ];
}
