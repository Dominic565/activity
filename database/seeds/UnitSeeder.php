<?php

use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $units = [
           [
               'unit_type' => 'can',
               'description'=> ' A Can'
           ],
           [
            'unit_type' => 'bottle',
            'description'=> ' A Bottle'
        ],
        [
            'unit_type' => 'rice',
            'description'=> ' A Rice'
        ],
        [
            'unit_type' => 'plastic',
            'description'=> ' A Plastic'
        ],
        [
            'unit_type' => 'refrigerator',
            'description'=> ' A Refregirator'
        ],
    ];
    foreach($units as $units){
        \App\Unit::create($units);
    }
    }
}
