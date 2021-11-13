<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
            'category' => 'Drink',
            'description'=> ' A Drink'
            ],
            [
                'category' => 'Food',
                'description'=> ' A Food'
            ],
                [
                    'category' => 'Things',
                    'description'=> ' A Things'
                    ]
            ];
            foreach($categories as $categories){
                \App\Category::create($categories);
            }
    }
}
