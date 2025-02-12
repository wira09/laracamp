<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Camp;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $camps = [
            [
                'title' => 'Gila Belajar',
                'slug' => 'gila-belajar', // Pastikan slug sesuai format URL-friendly
                'price' => 280,
                'created_at' => now(), // Gunakan now() untuk timestamp
                'updated_at' => now(),
            ],
            [
                'title' => 'Baru Mulai',
                'slug' => 'baru-mulai', // Pastikan slug sesuai format URL-friendly
                'price' => 140,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        // Simpan data ke database menggunakan insert()
        // cara pertama
        foreach ($camps as $key => $camp) {
            Camp::create($camp);
        }
        // cara kedua
        // Camp::insert($camps);

    }
}
