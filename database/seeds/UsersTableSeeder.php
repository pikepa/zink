<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Peter Pike',
            'email' => 'pikepeter@gmail.com',
            'password' => bcrypt('pap4163'),
        ]);
    }
}
