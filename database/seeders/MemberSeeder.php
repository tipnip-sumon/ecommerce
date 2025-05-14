<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Member;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Member::create([
            'name' => 'John Doe',
            'email' => 'sumonmti4981@gmail.com',
            'password' => bcrypt('password'),
            'phone' => '1234567890',
            'address' => '123 Main St',
            'city' => 'New York',
        ]);
    }
}
