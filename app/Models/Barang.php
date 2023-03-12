<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'tb_barang';
    protected $primaryKey = 'id_barang';
    protected $fillable = ['nama_barang', 'foto', 'tgl', 'harga_awal', 'deskripsi_barang'];
}
