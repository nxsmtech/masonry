<?php

use App\Block;
use Illuminate\Database\Seeder;

class DummyDataSeeder extends Seeder
{

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 2000; $i++) {
            factory(Block::class, 500)->create();
        }
    }
}