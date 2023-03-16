<?php

namespace Database\Seeders;

use App\Models\Bayar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Petugas;
use App\Models\Testi;
use Illuminate\Support\Facades\Hash;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Petugas::create([
            'nama_petugas' => 'Sanji Pratama',
            'username' => 'admin',
            'password' => Hash::make('sanji123'),
            'id_level' => '1',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        Petugas::create([
            'nama_petugas' => 'Michael Pratama',
            'username' => 'petugas',
            'password' => Hash::make('sanji123'),
            'id_level' => '2',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        Bayar::create([
            'pembayaran' => 'dana',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);
        Bayar::create([
            'pembayaran' => 'shopeepay',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);
        Bayar::create([
            'pembayaran' => 'bca',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);
        Bayar::create([
            'pembayaran' => 'bri',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);
        Bayar::create([
            'pembayaran' => 'cash',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);
        Bayar::create([
            'pembayaran' => 'ovo',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        Testi::create([
            'kepuasan' => 'buruk',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);
        Testi::create([
            'kepuasan' => 'cukup',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);
        Testi::create([
            'kepuasan' => 'puas',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);
        Testi::create([
            'kepuasan' => 'senang',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);
        Testi::create([
            'kepuasan' => 'bahagia',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ]);
    }
}
