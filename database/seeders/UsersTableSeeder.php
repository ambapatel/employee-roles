<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Default password for admin is - 12345678
       DB::table('users')->insert([
        'name' => 'Admin',
        'email' => 'admin@gmail.com',
        'password' => '$2y$10$c3bVXeDx16cs0piyjQbsT..HE2wOgnbEhQqQB4oSFGX5eGIFw9ooq',
        'remember_token' => '',
        'created_at' => Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon::now()->toDateTimeString(),
    ]);
    }
}
