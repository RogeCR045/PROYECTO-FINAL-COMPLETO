<?php

namespace Database\Factories;

use App\Models\Profession;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfessionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profession::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image'               =>$this->faker->image('public/images/professions', 200, 100, null, false),
            'name'                =>$this->faker->word,
            'ageyears'            =>$this->faker->randomDigitNot(0),
            'profession'          =>$this->faker->word,
            'phonenumber'         =>$this->faker->e164PhoneNumber,
            'yearsworking'        =>$this->faker->randomDigitNot(0),
            'inherited'           =>$this->faker->text($maxNbChars = 20),
            'description'         =>$this->faker->text($maxNbChars = 20),
            'commentcarr'         =>$this->faker->text($maxNbChars = 20),
        ];
    }
}
