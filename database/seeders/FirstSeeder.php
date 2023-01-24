<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class FirstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'kode' => '5737',
            'nis' => '6478',
            'fullname' => 'Najwa Aura',
            'password' => Hash::make('password'),
            'username' => 'auranyas',
            'kelas' => 'rpl',
            'alamat' => 'jl bakti mulya',
            'verif' => 'verified',
            'role' => 'user',
            'join_date' => '2023-01-06',
        ]);

    }
}
