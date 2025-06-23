#!/bin/bash

# Images sources par catégorie
electronique_img="electronic.jpg"
jardin_img="garden.jpg"
sport_img="sport.jpg"
vetement_img="clothes.jpg"

# Produits électronique
electronique_products=(
    "iphone-15-pro.jpg"
    "samsung-s24.jpg"
    "macbook-air-m3.jpg"
    "sony-wh1000xm5.jpg"
    "ipad-pro-129.jpg"
)

# Produits jardin & maison
jardin_products=(
    "aspirateur-robot.jpg"
    "canape-3-places.jpg"
    "tondeuse-electrique.jpg"
    "set-casseroles.jpg"
    "lampe-bureau-led.jpg"
)

# Produits sport & loisir
sport_products=(
    "velo-vtt-29.jpg"
    "raquette-tennis.jpg"
    "tapis-yoga.jpg"
    "ballon-football.jpg"
    "halteres-ajustables.jpg"
)

# Produits vêtement
vetement_products=(
    "jean-slim-fit.jpg"
    "chemise-oxford.jpg"
    "sneakers-air-max.jpg"
    "veste-cuir.jpg"
    "robe-ete.jpg"
)

# Fonction pour copier les produits
copy_products() {
    local source_img=$1
    local products=("${!2}")
    
    if [ ! -f "$source_img" ]; then
        echo "Erreur: Le fichier $source_img n'existe pas!"
        return 1
    fi
    
    for product in "${products[@]}"; do
        cp "$source_img" "$product"
        echo "Copié: $source_img -> $product"
    done
}

# Copier tous les produits
echo "=== Copie des produits électronique ==="
copy_products "$electronique_img" electronique_products[@]

echo "=== Copie des produits jardin & maison ==="
copy_products "$jardin_img" jardin_products[@]

echo "=== Copie des produits sport & loisir ==="
copy_products "$sport_img" sport_products[@]

echo "=== Copie des produits vêtement ==="
copy_products "$vetement_img" vetement_products[@]

echo "Toutes les copies sont terminées!"
