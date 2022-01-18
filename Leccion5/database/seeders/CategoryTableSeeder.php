<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();
        
        for($i = 1; $i<=20; $i++){
            Category::create([
                'title' => "Categoria $i",
                'url_clear' => "categoria-$i",
                ]);
        }
        /**Category::create([
        *    'title' => 'Categoria 1',
        *    'url_clean' => 'categoria-1',
        ]);*/
      
    }
}