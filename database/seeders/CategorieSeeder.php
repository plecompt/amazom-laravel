<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Électronique',
                'description' => 'Smartphones, ordinateurs, télévisions et accessoires high-tech'
            ],
            [
                'name' => 'Vêtements',
                'description' => 'Mode homme, femme et enfant - Toutes les tendances actuelles'
            ],
            [
                'name' => 'Maison & Jardin',
                'description' => 'Décoration, mobilier, outils de jardinage et électroménager'
            ],
            [
                'name' => 'Sports & Loisirs',
                'description' => 'Équipements sportifs, jeux et activités de plein air'
            ]
        ];

        foreach($categories as $category) {
            Category::create([
                'name' => $category['name'],
                'slug' => Str::slug($category['name']),
                'description' => $category['description']
            ]);
        }
    }
}
