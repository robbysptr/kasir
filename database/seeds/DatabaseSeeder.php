<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
            \App\User::create([
            'name'  => 'Admin',
             'email' => 'admin@admin.com',
             'password'  => bcrypt('admin'),
             'alamat' => 'ds Brengolo',
             'nomorhp' => '08578998832',
             'level' => 'admin'
        ]);

    }
}
