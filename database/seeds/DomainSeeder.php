<?php

use Illuminate\Database\Seeder;

class DomainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Domain::create ([
            'domain' => 'radio'
        ]);

        App\Domain::create ([
            'domain' => 'tv'
        ]);
    }
}
