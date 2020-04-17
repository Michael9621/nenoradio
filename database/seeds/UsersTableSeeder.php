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
        App\User::create ([
            'name' => 'Maureen',
            'email' => 'maureenmaina@gmail.com',
            'admin' => 1,
            'password' => Hash::make('123Mwangaza')
        ]);

        App\User::create([
            'name' => 'Peter',
            'email' => 'peter@mail.com',
            'admin' => 1,
            'password' => Hash::make('Mwangza123')
        ]);

        
    }
}
