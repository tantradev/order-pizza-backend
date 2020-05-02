<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ExtrasTableSeeder::class,
            MenuTableSeeder::class,
        ]);
    }
}

class ExtrasTableSeeder extends Seeder {

    public function run()
    {

        DB::table('extras')->delete();
        $extras = [
            ['name' => 'Pepperoni','price' => 1],
            ['name' => 'Mushrooms','price' => 1.5],
            ['name' => 'Onions','price' => 0.5],
            ['name' => 'Extra cheese','price' => 0.7],
        ];
        DB::table('extras')->insert($extras);
    }

}

class MenuTableSeeder extends Seeder {

    public function run()
    {
        DB::table('menus')->delete();
        $menu = [
            [
                'name' => 'Margherita',
                'description'=>'Tomato sauce, mozzarella, and oregano',
                'price' => 20,
                'dollarPrice'=>18,
            ],
            [
                'name' => 'Marinara',
                'description'=>'Tomato sauce, garlic and basil',
                'price' => 24,
                'dollarPrice'=>22,
            ],
            [
                'name' => 'Carbonara',
                'description'=>'Tomato sauce, mozzarella, parmesan, eggs, and bacon',
                'price' => 15,
                'dollarPrice'=>12,
            ],
            [
                'name' => 'Frutti di Mare',
                'description'=>'Tomato sauce and seafood',
                'price' => 30,
                'dollarPrice'=>28,
            ],
            [
                'name' => 'Napoli',
                'description'=>'Tomato sauce, mozzarella, oregano, anchovies',
                'price' => 21,
                'dollarPrice'=>19,
            ],
            [
                'name' => 'Prosciutto',
                'description'=>'Tomato sauce, mozzarella, ham, and oregano',
                'price' => 22,
                'dollarPrice'=>18,
            ],
            [
                'name' => 'Tonno',
                'description'=>'Tomato sauce, mozzarella, tuna, and onions',
                'price' => 15,
                'dollarPrice'=>13,
            ],
             [
                'name' => 'Calzone',
                'description'=>'Tomato sauce, mozzarella, ham, mushrooms, artichokes, anchovies, and oregano.',
                'price' => 15,
                'dollarPrice'=>13,
            ],
        ];
        DB::table('menus')->insert($menu);
    }

}