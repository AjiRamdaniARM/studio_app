<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produks extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_produk',
        'harga',
        'dekripsi',
        'foto_produk',
        'id_studio'
    ];

}
