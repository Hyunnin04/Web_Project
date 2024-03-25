<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
            'name' => "Moisturiser",
            'detail' => "Moisturiser including ...."
            ], [
                'name' => "Serums",
                'detail' => "Serums including ...."
            ]);
        DB::table('product_types')->insert($data);
    }
}
