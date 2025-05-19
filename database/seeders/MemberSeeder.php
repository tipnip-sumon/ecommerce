<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Member::factory()->count(10)->create();
        // Member::factory(10)->create();
    //     $json = File::get(path:'database/json/member.json');
    //     $members = collect(json_decode($json, true));
    //    for( $i = 0; $i < 1000; $i++) {
    //         $members->each(function ($member) {
    //              Member::create([
    //             'name' => fake()->name(),
    //             'email' => fake()->unique()->safeEmail(),
    //             'password' => bcrypt(fake()->password()),
    //             'phone' => fake()->phoneNumber(),
    //             'address' => fake()->address(),
    //             'city' => fake()->city()
    //      ]);  
    //         });
    //     }
          // $members = collect(
        //     [
        //         ['name' => 'Samiul Islam Rafi', 'email' => 'sumonmti400@gmail.com','password' => bcrypt('password'),'phone' => '1234567890','address' => '123 Main St','city' => 'New York'],
        //         ['name' => 'Samiul Islam Rafi', 'email' => 'sumonmti400@gmail.com','password' => bcrypt('password'),'phone' => '1234567890','address' => '123 Main St','city' => 'New York'],
        //         ['name' => 'Samiul Islam Rafi', 'email' => 'sumonmti400@gmail.com','password' => bcrypt('password'),'phone' => '1234567890','address' => '123 Main St','city' => 'New York'],
        //         ['name' => 'Samiul Islam Rafi', 'email' => 'sumonmti400@gmail.com','password' => bcrypt('password'),'phone' => '1234567890','address' => '123 Main St','city' => 'New York'],
        //         ['name' => 'Samiul Islam Rafi', 'email' => 'sumonmti400@gmail.com','password' => bcrypt('password'),'phone' => '1234567890','address' => '123 Main St','city' => 'New York'],
        //     ]);
        // $members->each(function ($member) {
        //     Member::create([
        //         'name' => $member['name'],
        //         'email' => $member['email'],
        //         'password' => bcrypt($member['password']),
        //         'phone' => $member['phone'],
        //         'address' => $member['address'],
        //         'city' => $member['city'],
        //     ]);
        // });    
        // Member::create([
        //     'name' => 'John Doe',
        //     'email' => 'sumonmti4981@gmail.com',
        //     'password' => bcrypt('password'),
        //     'phone' => '1234567890',
        //     'address' => '123 Main St',
        //     'city' => 'New York',
        // ]);
    }
}
