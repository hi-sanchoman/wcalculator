<?php

namespace Database\Factories;

use App\Models\Addon;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Addon::class;

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
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
