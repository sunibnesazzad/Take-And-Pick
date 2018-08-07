<?php

use Illuminate\Database\Seeder;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@infancyit.com',
            'password' => bcrypt('a')
        ]);
        $admin->userInfo()->create(['name' => $admin->name]);


        $user = User::create([
            'name' => 'user',
            'email' => 'user@infancyit.com',
            'password' => bcrypt('a')
        ]);
        $user->userInfo()->create(['name' => 'user']);

    }
}
