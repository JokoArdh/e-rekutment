<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'bagian' => $this->faker->sentence(),
            'title' => $this->faker->sentence(mt_rand(2, 8)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            // 'body' => '<p>'. implode('<p></p>'. $this->faker->paragraph(mt_rand(5, 10))) . '</p>',
            'deskripsi' => collect($this->faker->paragraphs(mt_rand(5, 10)))->map(
                fn($p) => "<p>$p</p>")->implode(''),
            'jamkerja' => $this->faker->sentence(),
        ];
    }
}
