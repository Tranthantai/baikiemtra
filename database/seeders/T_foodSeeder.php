<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\T_food;
class T_foodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        T_food::factory()
        ->count(10)
        ->create();

        /* DB::table('cars')->insert([
            'make' => Str::random(10),
            'model' => Str::random(10),
            'product_on' => date("y-m-d"), */
    
    }
}
