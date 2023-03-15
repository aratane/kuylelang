<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lelang extends Model
{
    use HasFactory;

    protected $table = 'tb_lelang';
    protected $primaryKey = 'id_lelang';

    protected $fillable = ['id_barang', 'tgl_lelang', 'harga_akhir', 'id_user', 'id_petugas', 'status'];
}
