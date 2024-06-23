<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $existingUser = DB::table('users')->where('email', 'ulul@gmail.com')->first();

    if (!$existingUser) {
        DB::table('users')->insert([
            'name' => 'Ahmad Ulul',
            'email' => 'ulul@gmail.com',
            'email_verified_at' => null,
            'password' => Hash::make('your_desired_password'),
            'remember_token' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}

}
