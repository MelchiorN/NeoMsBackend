<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Article::create([
            'name' => 'Ordinateur Portable HP',
            'description' => 'HP ProBook 450 G8 avec 16Go RAM',
            'unit_price' => 850000,
        ]);

        Article::create([
            'name' => 'Souris Logitech',
            'description' => 'Souris sans fil Logitech M170',
            'unit_price' => 15000,
        ]);

        Article::create([
            'name' => 'Clavier mécanique',
            'description' => 'Clavier mécanique AZERTY rétroéclairé',
            'unit_price' => 45000,
        ]);
    }
}
