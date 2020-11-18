<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illumiate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstname'=> Str::random(7),
            'lastname' => Str::random(7),
            'email'=> Str::random(7). '@gmail.com',
            'username'=>Str:: random(7),
            'password'=> Str::random(7),
            'birthday'=> Str::random(7)
        ]);

        DB::table('users')->insert([
            'firstname'=> Str::random(7),
            'lastname' => Str::random(7),
            'email'=> Str::random(7). '@gmail.com',
            'username'=>Str:: random(7),
            'password'=> Str::random(7),
            'birthday'=> Str::random(7)
        ]);

        DB::table('users')->insert([
            'firstname'=> Str::random(7),
            'lastname' => Str::random(7),
            'email'=> Str::random(7). '@gmail.com',
            'username'=>Str:: random(7),
            'password'=> Str::random(7),
            'birthday'=> Str::random(7)
        ]);
    }
}
?>
