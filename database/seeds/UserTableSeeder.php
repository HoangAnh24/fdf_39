<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::truncate();
       factory(User::class, 5)->create();

       factory(User::class)->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => 'password',
            'phone' => '011313131',
            'avatar' => 'default.jpg',
            'address' => 'Qnam',
        ]);
    }
}
