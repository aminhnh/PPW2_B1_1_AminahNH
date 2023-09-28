<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'barang';
    protected $fillable = [
        'nama_barang',
        'harga',
        'stok'
    ];
}
