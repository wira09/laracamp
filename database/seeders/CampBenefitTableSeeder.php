<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CampBenefit;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $campBenefits = [
            // Benefits for camp_id 1
            ['camp_id' => 1, 'name' => 'Pro Techstack Kit', 'created_at' => now(), 'updated_at' => now()],
            ['camp_id' => 1, 'name' => 'iMac Pro 2021 & Display', 'created_at' => now(), 'updated_at' => now()],
            ['camp_id' => 1, 'name' => '1-1 Mentoring Program', 'created_at' => now(), 'updated_at' => now()],
            ['camp_id' => 1, 'name' => 'Final Project Certificate', 'created_at' => now(), 'updated_at' => now()],
            ['camp_id' => 1, 'name' => 'Offline Course Videos', 'created_at' => now(), 'updated_at' => now()],
            ['camp_id' => 1, 'name' => 'Future Job Opportinity', 'created_at' => now(), 'updated_at' => now()],
            ['camp_id' => 1, 'name' => 'Premium Design Kit', 'created_at' => now(), 'updated_at' => now()],
            ['camp_id' => 1, 'name' => 'Website Builder', 'created_at' => now(), 'updated_at' => now()],

            // Benefits for camp_id 2
            ['camp_id' => 2, 'name' => '1-1 Mentoring Program', 'created_at' => now(), 'updated_at' => now()],
            ['camp_id' => 2, 'name' => 'Final Project Certificate', 'created_at' => now(), 'updated_at' => now()],
            ['camp_id' => 2, 'name' => 'Offline Course Videos', 'created_at' => now(), 'updated_at' => now()],
        ];

        // Simpan data ke database menggunakan insert()
        foreach ($campBenefits as $benefit) {
            CampBenefit::create($benefit);
        }
    }
}
