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
        return [
            'category_id' => $this->faker->word,
        'slug' => $this->faker->word,
        'name' => $this->faker->word,
        'price' => $this->faker->randomDigitNotNull,
        'type' => $this->faker->word,
        'width' => $this->faker->randomDigitNotNull,
        'size' => $this->faker->randomDigitNotNull,
        'price_el' => $this->faker->randomDigitNotNull,
        'price_kedr' => $this->faker->randomDigitNotNull,
        'img_1' => $this->faker->word,
        'img_2' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
