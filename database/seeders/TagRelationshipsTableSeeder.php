<?php

namespace Database\Seeders;

use App\Models\TagRelationship;
use Illuminate\Database\Seeder;

class TagRelationshipsTableSeeder extends Seeder
{
    public function run()
    {
        TagRelationship::factory()->count(50)->create();
    }
}
