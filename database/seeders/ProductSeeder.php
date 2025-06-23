<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Récupérer toutes les catégories
        $categories = Category::all();

        // Produits par catégorie
        $productsByCategory = [
            'Électronique' => [
                ['name' => 'iPhone 15 Pro', 'description' => 'Le dernier smartphone Apple avec puce A17 Pro', 'price' => 1229.00, 'image' => 'iphone-15-pro.jpg'],
                ['name' => 'Samsung Galaxy S24', 'description' => 'Smartphone Android haut de gamme avec IA intégrée', 'price' => 899.00, 'image' => 'samsung-s24.jpg'],
                ['name' => 'MacBook Air M3', 'description' => 'Ordinateur portable ultra-fin avec puce M3', 'price' => 1399.00, 'image' => 'macbook-air-m3.jpg'],
                ['name' => 'Sony WH-1000XM5', 'description' => 'Casque audio sans fil avec réduction de bruit', 'price' => 349.00, 'image' => 'sony-wh1000xm5.jpg'],
                ['name' => 'iPad Pro 12.9"', 'description' => 'Tablette professionnelle avec écran Liquid Retina XDR', 'price' => 1199.00, 'image' => 'ipad-pro-129.jpg'],
            ],
            'Vêtements' => [
                ['name' => 'Jean Slim Fit', 'description' => 'Jean en denim stretch confortable et moderne', 'price' => 79.99, 'image' => 'jean-slim-fit.jpg'],
                ['name' => 'Chemise Oxford', 'description' => 'Chemise classique en coton Oxford de qualité', 'price' => 49.99, 'image' => 'chemise-oxford.jpg'],
                ['name' => 'Sneakers Air Max', 'description' => 'Baskets sportswear avec technologie Air Max', 'price' => 129.99, 'image' => 'sneakers-air-max.jpg'],
                ['name' => 'Veste en Cuir', 'description' => 'Veste en cuir véritable style biker', 'price' => 299.99, 'image' => 'veste-cuir.jpg'],
                ['name' => 'Robe d\'été', 'description' => 'Robe légère et élégante pour la saison estivale', 'price' => 69.99, 'image' => 'robe-ete.jpg'],
            ],
            'Maison & Jardin' => [
                ['name' => 'Aspirateur Robot', 'description' => 'Robot aspirateur intelligent avec navigation laser', 'price' => 399.00, 'image' => 'aspirateur-robot.jpg'],
                ['name' => 'Canapé 3 Places', 'description' => 'Canapé confortable en tissu avec coussins moelleux', 'price' => 899.00, 'image' => 'canape-3-places.jpg'],
                ['name' => 'Tondeuse Électrique', 'description' => 'Tondeuse à gazon électrique silencieuse 1600W', 'price' => 249.00, 'image' => 'tondeuse-electrique.jpg'],
                ['name' => 'Set de Casseroles', 'description' => 'Set de 5 casseroles en inox avec poignées ergonomiques', 'price' => 159.00, 'image' => 'set-casseroles.jpg'],
                ['name' => 'Lampe de Bureau LED', 'description' => 'Lampe LED ajustable avec port USB intégré', 'price' => 89.00, 'image' => 'lampe-bureau-led.jpg'],
            ],
            'Sports & Loisirs' => [
                ['name' => 'Vélo VTT 29"', 'description' => 'VTT tout-terrain avec suspension avant et 21 vitesses', 'price' => 599.00, 'image' => 'velo-vtt-29.jpg'],
                ['name' => 'Raquette de Tennis', 'description' => 'Raquette de tennis professionnelle en graphite', 'price' => 199.00, 'image' => 'raquette-tennis.jpg'],
                ['name' => 'Tapis de Yoga', 'description' => 'Tapis de yoga antidérapant en matière écologique', 'price' => 39.99, 'image' => 'tapis-yoga.jpg'],
                ['name' => 'Ballon de Football', 'description' => 'Ballon de football officiel taille 5', 'price' => 29.99, 'image' => 'ballon-football.jpg'],
                ['name' => 'Haltères Ajustables', 'description' => 'Paire d\'haltères réglables de 2 à 20kg', 'price' => 149.00, 'image' => 'halteres-ajustables.jpg'],
            ],
        ];

        // Créer les produits pour chaque catégorie
        foreach ($categories as $category) {
            if (isset($productsByCategory[$category->name])) {
                foreach ($productsByCategory[$category->name] as $productData) {
                    Product::create([
                        'category_id' => $category->id,
                        'name' => $productData['name'],
                        'slug' => Str::slug($productData['name']),
                        'description' => $productData['description'],
                        'price' => $productData['price'],
                        'image' => $productData['image'],
                    ]);
                }
            }
        }
    }
}
