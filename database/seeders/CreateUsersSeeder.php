<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => '123456',
                'email' => 'admin@gmail.com',
                'is_admin' => '1',
                'password' => bcrypt('123456'),
            ],

            [
                'name' => '123456',
                'email' => 'user@gmail.com',
                'is_admin' => '0',
                'password' => bcrypt('123456'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}