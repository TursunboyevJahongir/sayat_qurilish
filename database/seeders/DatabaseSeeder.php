<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Posts;
use App\Models\Projects;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory()->create();
         Projects::factory(10)->create();
         Category::factory(10)->create();
         Posts::factory(10)->create();
    }
}
