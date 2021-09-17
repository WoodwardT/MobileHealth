<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'courseName' => $this->faker-> word(3),
            'startTime' => "9:00",
            'endTime' => "4:00",
            'price' => $this->faker-> randomFloat($nbMaxDecimals = 2, $min = 100, $max = 200),
            'location' => "Frankton, Queenstown",

            'created_at' => now(),
            'updated_at' => now(),
        ];

    }
}
