<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Артем',
            'login' => 'threeh',
            'post' => 'Full Stack Developer',
            'password' => Hash::make('asd890jkl'),
            'rememberToken' => Str::random(60),
        ]);
    }
}
