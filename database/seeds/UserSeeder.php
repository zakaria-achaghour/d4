<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // create users
         $admin = User::create([
            'username' => 'Admin-User',
            'email' => 'admin@admin.com',
            'firstname' => 'Zakaria',
            'lastname' => 'Achaghour',
            'gender' => 'male',
            'contact' => '06 38 41 40 46',
            'role' =>'admin',
            'password' => Hash::make('password')
        ]);
    }
}
