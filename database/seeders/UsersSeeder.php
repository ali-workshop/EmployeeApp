<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usersData = [
            [
               'name'   =>'employee1',
               'email'  =>'employee1@example.com',
               'role' => 'employee',
               'password' => Hash::make('12345678')
            ],
            [
                'name'   =>'employee2',
                'email'  =>'employee2@example.com',
                'role' => 'employee',
                'password' => Hash::make('12345678')
             ],
             [
                'name'   =>'employee3',
                'email'  =>'employee3@example.com',
                'role' => 'employee',
                'password' => Hash::make('12345678')
             ],
             [
                'name'   =>'employee4',
                'email'  =>'employee4@example.com',
                'role' => 'employee',
                'password' => Hash::make('12345678')
             ],
            [
               'name'       => 'manager1',
               'email'      => 'manager1@example.com',
               'role'   => 'manager',
               'password'   => Hash::make('12345678')
            ],
        ];
        foreach ($usersData as $key => $val) {
            User::create($val);
        }
    }
}