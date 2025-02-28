<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'username' => 'Admin',
                'email' => 'lv.thanh137@gmail.com',
                'password' => '$2y$12$gZGE7K1O2dqChQ.uYX47aOmUuIy/7s6Y1LGEmM6vbnuJzuNhC3QHG',
                'role' => 1,
                'is_active' => 1
            ],
            [
                'username' => 'Teacher',
                'email' => 'lv.thanh138@gmail.com',
                'password' => '$2y$12$Qs5k/rvgXiEB3sjf.UviI.KM/zRUvkO/lnb9AUbV.zZwFUvx0qf3u',
                'role' => 2,
                'is_active' => 1
            ],
            [
                'username' => 'Student',
                'email' => 'lv.thanh139@gmail.com',
                'password' => '$2y$12$eDaxnTyO1mp3bd831D6ePe4WmLJiLrLpXuTFt1dWqU29tiMNprd66',
                'role' => 3,
                'is_active' => 1
            ]
        ];

        foreach ($datas as $data) {
            User::create($data);
        }
    }
}
