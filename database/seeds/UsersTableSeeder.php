<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\User::class, 1)->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => '123456',
            'address' => 'DaNang',
            'phone' => '123123',
            'role' => 'admin',
        ]);
        factory(App\Models\User::class, 5)->create();
    }
}
