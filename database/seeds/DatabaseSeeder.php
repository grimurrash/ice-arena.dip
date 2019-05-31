<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name'=>'admin',
            'email'=>'admin@bk.ru',
            'password'=>bcrypt('admin'),
            'permission'=>'admin'
        ]);
    }
}
