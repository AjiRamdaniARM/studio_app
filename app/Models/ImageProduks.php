<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageProduks extends Model
{
    use HasFactory;
    protected $fillable = [
        'file',
        'id_produk'

    ];
}
