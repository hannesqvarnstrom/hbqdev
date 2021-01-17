<?php

namespace Database\Factories;

use App\Models\Tag;
use App\Models\TagRelationship;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TagRelationshipFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TagRelationship::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $tag_id = Tag::inRandomOrder()->value('id');
        $post = Post::inRandomOrder()->first();
        while (in_array($tag_id, $post->tags())) {
            $tag_id = Tag::inRandomOrder()->value('id');
        }; //this loop is intended to make sure that no duplicate relationships are made, but i think i can skip that honestly. whatever

        return [
            'post_id' => Post::inRandomOrder()->value('id'),
            'tag_id' => Tag::inRandomOrder()->value('id'),
        ];
    }
}
