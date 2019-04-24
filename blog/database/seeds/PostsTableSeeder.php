<?php

use App\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for ($i = 0; $i < 10; $i++) {
        //   $post = new Post();
        //   $post->name = Str::random();
        //   $post->content = 'random content';
        //   $post->save();
        factory(App\Post::class, 10)->create()->each(function ($post) {
            $post->comments()->saveMany(factory(\App\Comment::class, rand(0, 10)))->make();
        });

    }
}
