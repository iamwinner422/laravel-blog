<?php

namespace Database\Seeders;

use App\Models\Post;
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
         $categories = \App\Models\Category::factory(5)->create();
         \App\Models\User::factory(10)->create()->each(
             function ($user) use ($categories){
                Post::factory(rand(1,3))->create([
                    'user_id' =>$user->id,
                    'category' =>($categories->random(1)->first())->id
                ]);
             }
         );
    }
}
