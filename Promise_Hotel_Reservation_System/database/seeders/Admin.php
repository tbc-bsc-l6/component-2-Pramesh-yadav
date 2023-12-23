<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User:: create([
            'name' => 'Admin',
            'email' => 'adminpromise@gmail.com',
            'email_verified_at' => now(),
            'password' => 'Promise@123',
            'remember_token' => Str::random(10),
            'is_admin' => 1
        ]);
        //
    }
}
