<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Post;
use App\User;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $posts = 15;
        $users = User::all();

        for($i = 0; $i < $posts; $i++) {
            $title = $faker->text(60);

            $newPost = new Post();

            $newPost->user_id = $users->random()->id;
            $newPost->coverpost = $faker->imageUrl(640,480);
            $newPost->title = $title;
            $newPost->subtitle = $faker->text(200);
            $newPost->body = $faker->text(1000);
            $newPost->slug = Str::slug($title, '-');

            $newPost->save();
        }
    }
}
