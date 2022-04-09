<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_pelanggan',
        'nama_pelanggan',
        'alamat',
        'email',
        'no_telp',
    ];
}
