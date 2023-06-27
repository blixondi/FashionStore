<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name'=>"Pria",
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('categories')->insert([
            'name'=>"Wanita",
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);

        DB::table('categories')->insert([
            'name'=>"Anak",
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
    }
}
