<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = new User();
        $admin->name = env('ADMIN_NAME');
        $admin->email = env('ADMIN_USER');
        $admin->password = Hash::make(env('ADMIN_PASSWORD'));
        $admin->is_admin = true;
        $admin->save();
    }
}
