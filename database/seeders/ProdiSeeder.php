<?php

namespace Database\Seeders;

use App\Models\Prodi;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prodis = [
            [
                'nama' => 'Teknologi Informasi',
                'created_at' => Carbon::now()
            ],
            [
                'nama' => 'Sistem Informasi',
                'created_at' => Carbon::now()
            ],
            [
                'nama' => 'Pendidikan Teknologi Informasi',
                'created_at' => Carbon::now()
            ],
            [
                'nama' => 'Teknik Informatika',
                'created_at' => Carbon::now()
            ],
            [
                'nama' => 'Teknik Komputer',
                'created_at' => Carbon::now()
            ],
        ];
        Prodi::insert($prodis);
    }
}
