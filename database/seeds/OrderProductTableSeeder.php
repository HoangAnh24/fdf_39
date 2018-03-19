<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Order;
 
class OrderProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::all()->each(function($order){
            $order->products()->attach(
                Product::all()->random()->id, [ 
                    'price' => rand(1,5),                                
                    'quantity' => rand(1,20)
                ]
            );
        });  
    }
}
