<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Comment::factory()->count(25)->create();
    }
}
