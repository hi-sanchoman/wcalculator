<?php

namespace Database\Factories;

use App\Models\Increment;
use Illuminate\Database\Eloquent\Factories\Factory;

class IncrementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Increment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id' => $this->faker->word,
        'name' => $this->faker->word,
        'width' => $this->faker->randomDigitNotNull,
        'price' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
