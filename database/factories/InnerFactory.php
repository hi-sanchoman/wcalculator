<?php

namespace Database\Factories;

use App\Models\Inner;
use Illuminate\Database\Eloquent\Factories\Factory;

class InnerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Inner::class;

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
        'price' => $this->faker->randomDigitNotNull,
        'status' => $this->faker->randomElement(['']),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
