<?php

use Illuminate\Database\QueryException;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if (app()->environment() == 'development') {
            DB::beginTransaction();
            try {
                ini_set('memory_limit', '512M');
                $this->call(DummyDataSeeder::class);
                DB::commit();
            } catch (QueryException $qe) {
                $this->command->error("SQL Error: " . $qe->getMessage() . "\n");
                DB::rollBack();
            }
        }
    }
}
