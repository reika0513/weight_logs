<?php

namespace Database\Factories;

use App\Models\Weight_logs_;
use Illuminate\Database\Eloquent\Factories\Factory;

class Weight_logs_Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomDigit(),
            'date' => $this->faker->date(),
            'weight' => $this->faker->numberBetween(30,100),
            'calories' => $this->faker->numberBetween(1,1500),
            'exercise_time'=> $this->faker->time('i:s'),
            'exercise_content' => $this->faker->realText(20),
        ];
    }
}
