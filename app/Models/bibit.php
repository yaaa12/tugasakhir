<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\bibitController;

class bibit extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode',
        'nama_bibit',
        'harga',
        'satuan',
        'stok',
    ];
}
