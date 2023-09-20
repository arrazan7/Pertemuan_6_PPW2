<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuModel extends Model
{
    use HasFactory;
    protected $table = 'perpustakaan';
    protected $fillable = [
        'judul_buku',
        'penulis',
        'editor',
        'penerbit',
        'tanggal_terbit',
        'isbn',
        'jumlah_halaman',
        'jenis_buku',
        'harga'
    ];
}
