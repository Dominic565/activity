<?php

use Illuminate\Database\Seeder;

class MerchandiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $merchandise = [
           [
            'product_name'=>'Sardines',
            'brand_name'=>'Mega',
            'retail_price'=>22,
            'wholesale_price'=>15,
            'wholesale_qty'=>100,
            'qty_stock'=>150,
           ],
           [
            'product_name'=>'Water',
            'brand_name'=>'NatureSpring',
            'retail_price'=>50,
            'wholesale_price'=>10,
            'wholesale_qty'=>100,
            'qty_stock'=>100,
           ],
           [
            'product_name'=>'Beefloaf',
            'brand_name'=>'Fiesta',
            'retail_price'=>22,
            'wholesale_price'=>30,
            'wholesale_qty'=>100,
            'qty_stock'=>80,
           ]
           ];
           foreach($merchandise as $merchandise){
            \App\Merchandise::create($merchandise);
        }
    }
}
