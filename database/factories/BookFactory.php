<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstname' => $this->faker-> firstName,
            'lastname' => $this->faker->lastName,
            'mobile' => $this->faker->phonenumber,
            'email' => $this->faker->word(1),
            'dob' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'gender' => "female",
            'companyName' => $this->faker->word(1),
            'addressStreet' => $this->faker->streetAddress,
            'addressSuburb' => $this->faker->state,
            'addressCity' => $this->faker->state,
            'addressPostcode' => $this->faker->postcode,
            'addressCountry' => $this->faker->country,
            'courseDate' => $this->faker->date($format = 'Y-m-d', $min = 'now'),

            'created_at' => now(),
            'updated_at' => now(),
            'courseDate_id' => $this->faker->randomDigit+1,
        ];

    }
}
