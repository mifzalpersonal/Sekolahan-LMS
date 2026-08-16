<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AcceptedStudentSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('accepted_students')->insert([
            [
                'nisn'       => '1234567890',
                'nama'       => 'Budi Santoso',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nisn'       => '0987654321',
                'nama'       => 'Siti Aminah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}