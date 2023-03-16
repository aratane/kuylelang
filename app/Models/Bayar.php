<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bayar extends Model
{
    use HasFactory;

    protected $table = 'tb_bayar';
    protected $primaryKey = 'id_pembayaran';

    protected $fillable = ['id_pembayaran', 'pembayaran'];

    public function user()
    {
        return $this->hasMany(Bayar::class);
    }
}
