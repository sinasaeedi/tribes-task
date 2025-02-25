<?php

namespace Database\Factories;

use App\Enums\ColorEnum;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'        => fake()->words(rand(2, 4), true),
            'sku'         => fake()->unique()->numberBetween(100000, 999999),
            'brand_id'    => Brand::query()->inRandomOrder()->first()->id,
            'color'       => fake()->randomElement(ColorEnum::cases())->value,
            'description' => fake()->paragraph(3),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function ($product) {
            $categories = Category::query()->inRandomOrder()->take(rand(1, 3))->get();
            $product->categories()->attach($categories);
        });
    }
}
