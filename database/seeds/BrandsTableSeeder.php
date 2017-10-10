<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert(['name' => 'Easton']);
        DB::table('brands')->insert(['name' => 'Warrior']);
        DB::table('brands')->insert(['name' => 'Bauer']);
        DB::table('brands')->insert(['name' => 'Reebok']);
        DB::table('brands')->insert(['name' => 'CCM']);
    }
}
