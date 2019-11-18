<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\Category;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'featured_image' => $faker->imageUrl(),
        'category_id'=> function(){
    		return Category::all()->random();
    	},
        'content' => $faker->text,
        'slug' => str_slug($faker->word)
    ];
});
