<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

use App\Models\User;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $user = [
            [
                'name' => 'Dika Auls',
                'email' => 'dikaauls@gmail.com',
                'password' => Hash::make('dikadika123'),
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'developer',
                'email' => 'dev@okp.com',
                'password' => Hash::make('kamibantu388'),
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'developer ALD',
                'email' => 'dev@ald.com',
                'password' => Hash::make('kamibantu388'),
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'developer MTP',
                'email' => 'dev@mtp.com',
                'password' => Hash::make('kamibantu388'),
                'created_at' => date('Y-m-d H:i:s')
            ]
        ];

        foreach ($user as $dt) {
            User::create($dt);
        }
    }
}
