<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Histori extends Model
{
    use HasFactory;

    protected $table = 'history_lelang';
    protected $primaryKey = 'id_history';

    protected $fillable = ['id_lelang', 'id_barang', 'id_user', 'penawaran_harga'];
}
