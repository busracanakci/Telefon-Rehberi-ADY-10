<?php

namespace Database\Factories;

use App\Models\Kisiler;
use Illuminate\Database\Eloquent\Factories\Factory;
//use Illuminate\Database\QueryException;

class KisilerFactory extends Factory
{

    protected $model = Kisiler:class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      return [
          //'name' => $name =  $this->faker->firstname(),
          //'surname' => $this->faker->lastname(),
          //'phone' => $this->faker->e164PhoneNumber(),
          //'email' => $this->faker->unique()->safeEmail(),
          //'sehirid' => $this->faker->numberBetween(1,81),
          //'selflink' => strtolower($name),
          //'email_verified_at' => now(),
          //'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
          //'remember_token' => Str::random(10),
      ];
    }
}
