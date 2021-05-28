<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('users')->truncate(); //for cleaning earlier data to avoid duplicate entries
		DB::table('users')->insert([
			[
				'name' => 'Admin Account',
				'email' => 'admin@admin.com',
				'role' => '1',
				'password' => Hash::make('admin123'),
			],[
				'name' => 'User Account',
				'email' => 'user@user.com',
				'role' => '2',
				'password' => Hash::make('user123'),
			]
		]);
    }
}
