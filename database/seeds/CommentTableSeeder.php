<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Comment;
use App\Post;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $posts = Post::all();

        foreach ($posts as $post) {
            $newComment = new Comment();

            $newComment->post_id = $post->id;
            $newComment->name = $faker->name();
            $newComment->content = $faker->text(50);

            $newComment->save();
            
        }
    }
}
