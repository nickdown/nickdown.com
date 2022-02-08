<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    public function definition(): array
    {
        $title = $this->faker->sentence;
        return [
            'title' => $title,
            'body' => $this->faker->paragraph,
            'slug' => Str::slug($title, '-'),
            'user_id' => User::factory(),
            'is_published' => $this->faker->boolean,
        ];
    }

    public function published(): PostFactory
    {
        return $this->state(function (array $attributes) {
            return [
                'is_published' => true,
            ];
        });
    }

    public function unpublished(): PostFactory
    {
        return $this->state(function (array $attributes) {
            return [
                'is_published' => false,
            ];
        });
    }
}
