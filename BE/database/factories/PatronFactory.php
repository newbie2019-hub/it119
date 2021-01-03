<?php

namespace Database\Factories;

use App\Models\Patron;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatronFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Patron::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'last_name' => $this->faker->lastName,
            'middle_name' => $this->faker->lastName,
            'first_name' => $this->faker->firstName,
            'email' => $this->faker->email,
        ];
    }
}
