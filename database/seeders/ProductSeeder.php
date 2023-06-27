<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for($i=1;$i<=4;$i++){
            for($j=1;$j<=3;$j++){
                DB::table('products')->insert([
                    'name'=>$faker->word(),
                    'categories_id'=>$j,
                    'types_id'=>$i,
                    'brand'=> $faker->word(),
                    'price'=>$faker->randomNumber(5, true),
                    'dimension'=>$faker->randomDigitNotNull() . " " . $faker->randomElement(['cm','ml','kg']),
                    'description'=>$faker->paragraph(),
                    'img_url'=>'placeholder.png',
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now()
                ]);
            }
        }
    }
}
