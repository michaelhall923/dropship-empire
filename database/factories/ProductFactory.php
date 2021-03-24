<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->realText(33);
        $slug = preg_replace('/[^\w\s]/', '', $title);
        $slug = preg_replace('/[\s]/', '-', $slug);
        $slug = strtolower($slug);
        $buying_price = lcg_value() * 19 + 1;
        $selling_price = $buying_price * (lcg_value() * 3 + 2);
        return [
            'title' => $title,
            'description' => $this->faker->realText(144),
            'img_url' => 'https://picsum.photos/seed/' . rand() . '/800?_=' . rand(),
            'product_url' => 'https://aliexpress.com',
            'slug' => $slug,
            'buying_price' => $buying_price,
            'selling_price' => $selling_price
        ];
    }
}
