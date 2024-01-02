<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('group')->insert([
            'id' => 99,
            'name' => 'admin',
            'password' => 'admin123',
            'is_binusian' => false,
            'is_admin' => true,
        ]);
    }
}
