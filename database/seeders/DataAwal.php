<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataAwal extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'John Doe';
        $user->email = 'john@example.com';
        $user->password = bcrypt('password');
        $user->peran = 'admin';
        $user->save();
    }
}
