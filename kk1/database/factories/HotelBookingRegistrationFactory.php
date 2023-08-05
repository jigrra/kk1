<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\numerify;
use Illuminate\Database\Seeder;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HotelBookingRegistration>
 */
class HotelBookingRegistrationFactory extends Factory
{
    public function definition()

{
    return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->numerify('#########'),
            'bookingdate' => $this->faker->dateTime(),
            'aadhar' => $this->faker->numerify('#########'),
           'avatar' => $this->faker->image(storage_path('images'), 300, 300)

          ];
}
    
}
