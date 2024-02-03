<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('group')->insert([
            'id' => Group::count() + 1,
            'name' => 'admin',
            'password' => Hash::make('admin123'),
            'is_binusian' => false,
            'is_admin' => true,
        ]);
    }
}
