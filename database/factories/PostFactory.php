<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\models\Post;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model =Post::class;

    public function definition()
    {
        return [
            //
            'title' => $this->faker->sentence(5)
        ];
    }
}
