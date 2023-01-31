<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryCifrasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ['uncategorize','inicio','nuestros-valores','corabastos','prea'];
        for ($i=1; $i < 6; $i++) { 
            DB::table('category_cifras')->insert([
                'id' => $i,
                'nombre' => $names[$i-1],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
