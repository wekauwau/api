<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = [
        'jenis_barang_id',
        'nama',
        'harga',
        'stok',
    ];
}
