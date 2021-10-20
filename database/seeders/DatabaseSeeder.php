<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
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
        // User::truncate();
        // Post::truncate();
        // Category::truncate();
        $user = User::factory()->create([
            'name' => 'fahath',
        ]);
        $category = Category::factory()->create([
            'id' => 1,
        ]);
      //  Post::factory(10)->create();

        Post::factory(30)->create([
            'user_id'     => $user->id,
            'category_id' => $category->id,
        ]);

        // $personal = Category::create([
        //     'name' => 'personal',
        //     'slug' => 'personal',
        // ]);

        // $family = Category::create([
        //     'name' => 'family',
        //     'slug' => 'family',
        // ]);

        // $work = Category::create([
        //     'name' => 'work',
        //     'slug' => 'work',
        // ]);

        // Post::create([
        //     'slug' => 'my family',
        //     'title' => 'my-first-post',
        //     'user_id' => $user->id,
        //     'category_id' => $family->id,
        //     'excerpt' => 'Lorem ipsum, dolor sit amet',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum quae molestiae at culpa animi debitis qui, magnam ut nemo, nisi sapiente alias fugiat mollitia consectetur odit iste voluptas? Odio, sunt?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum quae molestiae at culpa animi debitis qui, magnam ut nemo, nisi sapiente alias fugiat mollitia consectetur odit iste voluptas? Odio, sunt?',
        // ]);

        // Post::create([
        //     'slug' => 'my work',
        //     'title' => 'my-second-post',
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'excerpt' => 'Lorem ipsum, dolor sit amet',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum quae molestiae at culpa animi debitis qui, magnam ut nemo, nisi sapiente alias fugiat mollitia consectetur odit iste voluptas? Odio, sunt?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum quae molestiae at culpa animi debitis qui, magnam ut nemo, nisi sapiente alias fugiat mollitia consectetur odit iste voluptas? Odio, sunt?',
        // ]);

        // Post::create([
        //     'slug' => 'my perosnal',
        //     'title' => 'my-third-post',
        //     'user_id' => $user->id,
        //     'category_id' => $personal->id,
        //     'excerpt' => 'Lorem ipsum, dolor sit amet',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum quae molestiae at culpa animi debitis qui, magnam ut nemo, nisi sapiente alias fugiat mollitia consectetur odit iste voluptas? Odio, sunt?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum quae molestiae at culpa animi debitis qui, magnam ut nemo, nisi sapiente alias fugiat mollitia consectetur odit iste voluptas? Odio, sunt?',
        // ]);
    }
}
