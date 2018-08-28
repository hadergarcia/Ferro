<?php

use Illuminate\Database\Seeder;
use App\ticket;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ticket::class,80)->create();
    }
}
