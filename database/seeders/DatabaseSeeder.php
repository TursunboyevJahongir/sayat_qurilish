<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Data;
use App\Models\Employer;
use App\Models\Message;
use App\Models\News;
use App\Models\Posts;
use App\Models\Projects;
use App\Models\Slideshow;
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
         News::factory(10)->create();
         Message::factory(10)->create();
         Slideshow::factory(10)->create();
         Employer::factory(10)->create();
         Data::factory(10)->create();
    }
}
