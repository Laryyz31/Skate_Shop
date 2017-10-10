<?php

use Illuminate\Database\Seeder;

class SkatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skates')->insert([
            'name' => 'Player Skate',
            'description' => 'For Players',
            'brand_id' => 1,
            'category_id' => 1,
            'model_manufacture_date' => '2013-09-03',
        ]);
        DB::table('skates')->insert([
            'name' => 'Goalie Skate',
            'description' => 'For Goalies',
            'brand_id' => 2,
            'category_id' => 2,
            'model_manufacture_date' => '2012-02-01',
        ]);
        DB::table('skates')->insert([
            'name' => 'Junior Skate ',
            'description' => 'For Kids',
            'brand_id' => 3,
            'category_id' => 3,
            'model_manufacture_date' => '2010-10-10',
        ]);

    }
}
