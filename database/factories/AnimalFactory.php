<?php

namespace Database\Factories;

use App\Models\Animal;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnimalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Animal::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image'         =>$this->faker->image('public/images/professions', 200, 100, 'musics', null, false),
            'animal'        =>$this->faker->word,
            'age'           =>$this->faker->randomDigitNot(0),
            'birthplace'    =>$this->faker->timezone,
            'climate'       =>$this->faker->word,
            'color'         =>$this->faker->safeColorName,
            'fur'           =>$this->faker->word,
            'food'          =>$this->faker->word,
            'comemmtanim'   =>$this->faker->word,
        ];
    }
}
