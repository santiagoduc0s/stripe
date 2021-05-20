<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('product-photos');
        Storage::makeDirectory('product-photos');
        Product::factory(50)->create();

        Storage::deleteDirectory('article-photos');
        Storage::makeDirectory('article-photos');
        Article::factory(50)->create();
    }
}
