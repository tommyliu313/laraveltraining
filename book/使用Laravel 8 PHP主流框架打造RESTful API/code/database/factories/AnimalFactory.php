<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Animal;
use App\Models\User;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Animal>
 */
class AnimalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Animal::class;

    public function definition(): array
    {
        return [
            'type_Id' => $this->faker->numberBetween(1,3),
            'name' => $this->faker->name,
            'birthday' => $this->faker->date(),
            'area' => $this->faker->city,
            

        ];
    }
}
