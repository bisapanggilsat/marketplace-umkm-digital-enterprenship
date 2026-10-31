<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

   public function run(): void
{
    User::updateOrCreate(['email' => 'admin@marketplace.test'], [
        'name' => 'Admin',
        'password' => Hash::make('password'),
        'role' => 'admin',
    ]);

    User::updateOrCreate(['email' => 'umkm@marketplace.test'], [
        'name' => 'Warung Contoh',
        'password' => Hash::make('password'),
        'role' => 'customer',
        'business_name' => 'Pt. Contoh Usaha',
    ]);
}
};