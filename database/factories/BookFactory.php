<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{

    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence($nbWords = 4, $variableNbWords = true),
            'author' => $this->faker->firstName." ".$this->faker->lastName,
            'publication_year' => $this->faker->numberBetween(1900, date('Y')),
            'publisher' => $this->faker->firstName." ".$this->faker->lastName,
            'isbn' =>  $this->faker->regexify('978-\d-\d{3}-\d{5}-\d')
        ];
    }
}
