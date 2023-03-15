<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    use HasFactory;

    protected $table = 'tb_petugas';
    protected $primaryKey = 'id_petugas';

    protected $fillable = ['nama_petugas', 'username', 'password', 'id_level'];
    protected $hidden = [
        'password'
    ];

    public function user()
    {
        return $this->hasMany(Petugas::class);
    }
}
