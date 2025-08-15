<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@speakersmarter.com',
            'password' => Hash::make('Admin123'),
        ]);
        $admin->assignRole('admin');
        $editor = User::create([
            'name' => 'Editor',
            'email' => 'editor@speakersmarter.com',
            'password' => Hash::make('Editor123'),
        ]);
        $editor->assignRole('editor');
    }
}
