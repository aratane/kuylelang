<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'tb_petugas';
    protected $primaryKey = 'id_petugas';
    protected $guard = 'admin';

    protected $fillable = ['nama_petugas', 'username', 'password', 'id_level'];
    protected $hidden = [
        'password'
    ];
}
