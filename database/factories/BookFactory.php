<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Book::class;
    public function definition(): array
    {
        return [
            'judul' => $this->faker->sentence,
            'halaman' => $this->faker->numberBetween(100, 500),
            'penulis' => $this->faker->name,
            'penerbit' => $this->faker->company,
        ];
    }
}
