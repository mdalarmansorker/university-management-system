<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Admin',
            'university_id' => '100',
            'email' => 'arman.sorker@rebingdev.com',
            'email_verified_at' => now(),
            'phone' => '01973408603',
            'phone_verified_at' => now(),
            'password' => Hash::make('adminadmin')
        ]);
        $user->assignRole('admin');
    }
}
