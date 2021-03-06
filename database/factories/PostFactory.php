<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(15),
            'body' => $this->faker->text(3500),
            'excerpt' => $this->faker->text(40),
            'user_id' => User::inRandomOrder()->value('id'),
            'category_id' => Category::inRandomOrder()->value('id')
        ];
    }
}
