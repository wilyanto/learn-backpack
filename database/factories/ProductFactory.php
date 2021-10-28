<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Product;

$faker = \Faker\Factory::create();

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
        
        // $faker->addProvider(FakerRe);
        return [
            'category_id' => $this->faker->boolean(50) ? Category::factory() : null,
            'name' => $this->faker->name,
            'current_stock' => $this->faker->numberBetween(1, 10),
        ];
    }
}
