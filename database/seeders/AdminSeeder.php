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
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'email_verified_at' => date("Y-m-d H:i:s"),
            'password' => Hash::make('admin'),
            'fullacces' => 'yes',
            'codigo' => 'admin',
            'apellido' => 'Admin',
            'dni' => '123456'
        ]);

        $userAdmin=User::create([
            'name' => 'Nicolas',
            'email' => 'nicozanier22@hotmail.com',
            'email_verified_at' => date("Y-m-d H:i:s"),
            'password' => Hash::make('nzanier2021'),
            'fullacces' => 'yes',
            'codigo' => 'admin',
            'apellido' => 'Zanier',
            'dni' => '54321'
        ]);

        $userAdmin=User::create([
            'name' => 'Virginia',
            'email' => 'admin2@mail.com',
            'email_verified_at' => date("Y-m-d H:i:s"),
            'password' => Hash::make('vbarrenechea2021'),
            'fullacces' => 'yes',
            'codigo' => 'admin',
            'apellido' => 'Barrenechea',
            'dni' => '12345'
        ]);
        $userAdmin=User::create([
            'name' => 'Debora',
            'email' => 'admin3@mail.com',
            'email_verified_at' => date("Y-m-d H:i:s"),
            'password' => Hash::make('dzantleifer2021'),
            'fullacces' => 'yes',
            'codigo' => 'admin',
            'apellido' => 'Zantleifer',
            'dni' => '123458'
        ]);
        $userAdmin=User::create([
            'name' => 'Gabriel',
            'email' => 'admin4@mail.com',
            'email_verified_at' => date("Y-m-d H:i:s"),
            'password' => Hash::make('gzelaya'),
            'fullacces' => 'yes',
            'codigo' => 'admin',
            'apellido' => 'Zelaya',
            'dni' => '1234589'
        ]);

    }
}
