<?php

namespace Database\Seeders;

use App\Models\Matakuliah;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nama' => 'Pemrograman Dasar',
                'created_at' => Carbon::now()
            ],
            [
                'nama' => 'Pemrograman Lanjut',
                'created_at' => Carbon::now()
            ],
            [
                'nama' => 'Algoritma dan Struktur Data',
                'created_at' => Carbon::now()
            ],
            [
                'nama' => 'Sistem Basis Data',
                'created_at' => Carbon::now()
            ],
            [
                'nama' => 'Jaringan Komputer Dasar',
                'created_at' => Carbon::now()
            ],
        ];
        Matakuliah::insert($data);
    }
}
