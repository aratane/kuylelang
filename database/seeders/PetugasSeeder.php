<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Petugas;

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
            'password' => 'sanji123',
            'id_level' => '1',
        ]);

        Petugas::create([
            'nama_petugas' => 'Michael Pratama',
            'username' => 'petugas',
            'password' => 'sanji123',
            'id_level' => '2',
        ]);
    }
}
