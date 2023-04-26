<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model=Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'jina'=>$this->faker->name(3),
            'maelezo'=>$this->faker->paragraph(4),
            'bei'=>$this->faker->numberBetween(2000,50000) 
        ];
    }
}
