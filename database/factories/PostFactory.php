<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(4),
            'content' => $this->faker->realText,
            'category_id' => Category::get()->random()->id,
            'preview_image' => 'images/afBs3pcEZHSPV9cQk04BkfSt6t3BDCnqj2S2TqwJ.jpg',
            'main_image' => 'images/hNIggxeunCYkYwidgyQxlhIBlUiY7buFGMH2dWvP.jpg',
        ];
    }
}
