<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'tb_transaksi';
    protected $primaryKey = 'id_transaksi';

    protected $fillable = ['id_transaksi', 'metode', 'id_pembayaran', 'id_user', 'id_petugas', 'id_testimoni', 'keterangan'];
}
