<?php

namespace Database\Factories;

use App\Models\Player;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PlayerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Player::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'age' => $this->faker->numberBetween($min = 17, $max = 28),
            'position' => $this->faker->stateAbbr,
            'about' => $this->faker->text,
            'player_image' => $this->faker->imageUrl($width = 300, $height = 300),
            'number' => $this->faker->numberBetween($min = 1, $max = 25),
        ];
    }
}
