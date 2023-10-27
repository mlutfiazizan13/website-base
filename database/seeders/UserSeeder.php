<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                 'username' => 'admin',
                 'name' => 'ADMIN',
                 'email' => 'admin@admin.com',
                 'password' => Hash::make('12345')
            ],
          ]);
    }
}
