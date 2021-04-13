<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'fernando',
            'email' => 'fer@fer.com',
            'code_user' => '1234',
            'password' => bcrypt('1234')
        ]);
    }
}
