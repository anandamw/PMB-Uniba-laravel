<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'ananda maulana wahyudi',
                'email' => 'ananda@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'lidiana putri',
                'email' => 'lidiana@gmail.com ',
                'role' => 'admin',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Syahrul hasanah',
                'email' => 'syahrul@gmail.com ',
                'role' => 'admin',
                'password' => bcrypt('123456'),
            ],
        ];

        foreach ($userData as $data => $in) {
            User::create($in);
        }
    }
}
