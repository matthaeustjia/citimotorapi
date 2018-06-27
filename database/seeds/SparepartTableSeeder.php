<?php

use Illuminate\Database\Seeder;

class SparepartTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Sparepart', 50)->create();
    }
}
