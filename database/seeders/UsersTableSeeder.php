<?php

namespace Database\Seeders;

use DB;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $limit = 15;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->email,
                'password' => Hash::make('12345678'),
                'address' => $faker->address,
                'birthday' => $faker->dateTimeInInterval($startDate = '-40 years', $interval = '+ 5 days', $timezone = null),
                'created_at' => $faker->dateTimeThisYear($max = 'now', $timezone = null),
                'phone' => '08161776623',
                'role_id' => 4,
            ]);
        }
    }
}
