<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\numerify;
use Illuminate\Database\Seeder;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\contact>
 */
class contactFactory extends Factory
{
     public function definition()

{
    return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
             'message' => $this->faker->sentence(),
           ];
}
    
}
