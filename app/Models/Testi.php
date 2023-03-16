<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testi extends Model
{
    use HasFactory;

    protected $table = 'tb_testimoni';
    protected $primaryKey = 'id_testimoni';

    protected $fillable = ['id_testimoni', 'kepuasan'];

    public function user()
    {
        return $this->hasMany(Testi::class);
    }
}
