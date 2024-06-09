<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;
    public function test_can_view_all_products()
    {
        Category::create(['name' => 'Electronics']);
        Product::create([
            'name' => 'Product 1',
            'description' => 'Description 1',
            'price' => 100,
            'stock_level' => 10,
            'category_id' => 1
        ]);
        Product::create([
            'name' => 'Product 2',
            'description' => 'Description 2',
            'price' => 200,
            'stock_level' => 20,
            'category_id' => 1
        ]);

        $response = $this->get('/products');

        $response->assertStatus(200);

    }

    public function test_can_create_product()
    {
        $category = Category::create(['name' => 'Electronics']);

        $response = $this->post('/products', [
            'name' => 'Test Product',
            'description' => 'Test Description',
            'price' => 99.99,
            'stock_level' => 10,
            'category_id' => $category->id
        ]);

        $response->assertRedirect('/products');

    }

}
