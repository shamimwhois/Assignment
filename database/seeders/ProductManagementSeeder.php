<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductManagementSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Electronics', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Clothing', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Food', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Books', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sports', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('products')->insert([
            ['category_id' => 1, 'name' => 'Laptop', 'price' => 999.99, 'stock' => 10, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 1, 'name' => 'Smartphone', 'price' => 599.99, 'stock' => 25, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 2, 'name' => 'T-Shirt', 'price' => 19.99, 'stock' => 100, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 2, 'name' => 'Jeans', 'price' => 49.99, 'stock' => 50, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 3, 'name' => 'Pizza', 'price' => 12.99, 'stock' => 30, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 3, 'name' => 'Burger', 'price' => 8.99, 'stock' => 40, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 4, 'name' => 'Novel', 'price' => 15.99, 'stock' => 20, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 4, 'name' => 'Magazine', 'price' => 5.99, 'stock' => 60, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 5, 'name' => 'Football', 'price' => 29.99, 'stock' => 15, 'created_at' => now(), 'updated_at' => now()],
            ['category_id' => 5, 'name' => 'Basketball', 'price' => 24.99, 'stock' => 20, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}