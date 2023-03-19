<?php

namespace App\Models;

use App\Traits\HashFormatRupiah;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    use HashFormatRupiah;

    protected $table = 'tb_barang';
    protected $primaryKey = 'id_barang';

    protected $fillable = ['id_barang', 'foto', 'nama_barang', 'tgl', 'harga_awal', 'deskripsi_barang', 'id_user', 'id_petugas'];

    public function user()
    {
        return $this->hasMany(Barang::class);
    }
}
