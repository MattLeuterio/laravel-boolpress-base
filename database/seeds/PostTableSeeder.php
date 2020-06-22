<?php

use Illuminate\Database\Seeder;
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
        $posts = 20;
        $users = User::all();

        for($i = 0; $i < $posts; $i++) {
            $newPost = new Post();

            $newPost->user_id = $users->random()->id;
            $newPost->coverpost = $faker->imageUrl(640,480);
            $newPost->title = $faker->text(60);
            $newPost->subtitle = $faker->text(200);
            $newPost->body = $faker->text(1000);

            $newPost->save();
        }
    }
}
