<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userAdmin=User::create([
            'name' => 'Nicolas',
            'email' => 'admin@mail.com',
            'email_verified_at' => date("Y-m-d H:i:s"),
            'password' => Hash::make('admin'),
            'fullacces' => 'yes',
            'codigo' => 'admin',
            'apellido' => 'Zanier',
            'dni' => '54321'
        ]);

        $userAdmin=User::create([
            'name' => 'Virginia',
            'email' => 'admin2@mail.com',
            'email_verified_at' => date("Y-m-d H:i:s"),
            'password' => Hash::make('admin'),
            'fullacces' => 'yes',
            'codigo' => 'admin',
            'apellido' => 'Barreneche',
            'dni' => '12345'
        ]);
    }
}
