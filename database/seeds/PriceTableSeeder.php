<?php

use Illuminate\Database\Seeder;
use App\Models\Price;

class PriceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Price::class, 5)->create();
    }
}
