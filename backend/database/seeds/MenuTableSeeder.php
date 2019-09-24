<?php

use Illuminate\Database\Seeder;
use App\Menu;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::create([
            'name' => 'Pizza Margherita Bufalina',
            'description' => 'Tomatoes | Mozzarella Bufala Campana DOP
Basil | Extra virgin olive oil "Gold" -
Frantoio Romano (Campania)',
            'price' => '9.50',
            'image_link' => 'https://firebasestorage.googleapis.com/v0/b/palatable-pizza.appspot.com/o/pizza-margherita-bufalina.jpg?alt=media&token=e4b8769c-03b3-4821-a7f5-348c723d953f'
        ]);

        Menu::create([
            'name' => 'Nice pizza (vegetarian)',
            'description' => 'tomatoes | Oven-baked vegetables of paprika,
aubergine and zucchini
Oregano Mozzarella di Bufala
Campana DOP',
            'price' => '10.50',
            'image_link' => 'https://firebasestorage.googleapis.com/v0/b/palatable-pizza.appspot.com/o/nice-pizza.jpeg?alt=media&token=54fa4c72-5e2d-4e21-88b1-08490710a224'
        ]);

        Menu::create([
            'name' => 'Pizza Rocky Balboa\'s Bacon',
            'description' => 'Provolone | Pear | South Tyrolean Bacon
Rucola | caramelized walnuts',
            'price' => '12.50',
            'image_link' => 'https://firebasestorage.googleapis.com/v0/b/palatable-pizza.appspot.com/o/pizza-rocky.jpg?alt=media&token=8c5e6b23-f61d-4ede-8edc-faf0cf3eb41f'
        ]);

        Menu::create([
            'name' => 'Pizza Popeye Pie (vegetarian)',
            'description' => 'Styrian mountain cheese | Fior di latte
mozzarella | Baby spinach | Garlic
pepper "Hennes Finest"',
            'price' => '9.50',
            'image_link' => 'https://firebasestorage.googleapis.com/v0/b/palatable-pizza.appspot.com/o/pizza-popey-pie-2.jpg?alt=media&token=0661d0ec-2f97-4e18-964f-fdcac76053bc'
        ]);

        Menu::create([
            'name' => 'Pizza Salame',
            'description' => 'Tomatoes | Fior di Latte Mozzarella
Tuscan fennel salami',
            'price' => '9.50',
            'image_link' => 'https://firebasestorage.googleapis.com/v0/b/palatable-pizza.appspot.com/o/pizza-salame.jpg?alt=media&token=1d575bfb-6713-4fbd-817a-c963d1d5fd3d'
        ]);

        Menu::create([
            'name' => 'Pizza Marinara De Luxe (vegan)',
            'description' => 'Tomatoes | Oregano | Garlic
Cherry Tomatoes "Capperi di
Pantelleria IGP" (capers)',
            'price' => '7.50',
            'image_link' => 'https://firebasestorage.googleapis.com/v0/b/palatable-pizza.appspot.com/o/pizza-marinara-delux.jpg?alt=media&token=1860953d-deb4-40be-8a80-131e47cc654f'
        ]);

        Menu::create([
            'name' => 'Pizza Mr. Burns (it\'s HOT!)',
            'description' => 'Tomatoes | Fior di Latte Mozzarella
Nduja (Calabrian sausage) | Red onions
peppers',
            'price' => '12.00',
            'image_link' => 'https://firebasestorage.googleapis.com/v0/b/palatable-pizza.appspot.com/o/pizza-popey-pie-2.jpg?alt=media&token=0661d0ec-2f97-4e18-964f-fdcac76053bc'
        ]);

        Menu::create([
            'name' => 'Pizza Holy Guacamole (vegan)',
            'description' => 'avocado-basil-guacamole | Rocket
cumin | Kalamata Olives
Cherry Tomatoes | Sweet potato chips',
            'price' => '11.50',
            'image_link' => 'https://firebasestorage.googleapis.com/v0/b/palatable-pizza.appspot.com/o/pizza-holy-guaca.jpg?alt=media&token=651cfea9-01f1-43e3-b223-024d8030d298'
        ]);

        Menu::create([
            'name' => 'Pizza Carpaccio',
            'description' => 'Fontina d\'Aosta | Fior di Latte Mozzarella
Black Angus Carpaccio | Arugula
Parmesan 24 DOP',
            'price' => '13.50',
            'image_link' => 'https://firebasestorage.googleapis.com/v0/b/palatable-pizza.appspot.com/o/pizza-carpaccio.jpg?alt=media&token=c23ab5fb-d1d2-4f01-afea-a8476bae761f'
        ]);

        Menu::create([
            'name' => 'Pizza Margherita (vegetarian)',
            'description' => 'tomatoes | Fior di Latte mozzarella
basil | Extra virgin olive oil "Gold" -
Frantoio Romano (Campania)',
            'price' => '8.50',
            'image_link' => 'https://firebasestorage.googleapis.com/v0/b/palatable-pizza.appspot.com/o/pizza-margerita-veg.jpg?alt=media&token=56d81eba-3814-453d-a3d7-931f87320849'
        ]);
    }
}
