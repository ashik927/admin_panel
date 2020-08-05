<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       return User::create([
            'name' => "Ashik | Admin",
            'email' => "ashik@gmail.com",
            'password' => Hash::make("00000000"),
            'type'=>"admin"
        ]);
    }
}
