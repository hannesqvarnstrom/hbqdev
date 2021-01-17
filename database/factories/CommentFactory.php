<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $post = Post::inRandomOrder()->first();
        $post->incrementCommentCount();
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->safeEmail,
            'body' => $this->faker->text(40),
            'post_id' => $post->id,
        ];
    }
}
