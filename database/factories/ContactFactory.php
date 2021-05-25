<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image'          =>$this->faker->image('public/images/professions', 200, 100, null, false),
            'fullname'       =>$this->faker->word,
            'years'          =>$this->faker->randomDigitNot(0),
            'mailaddress'    =>$this->faker->email,
            'password'       =>$this->faker->password,
            'Street'         =>$this->faker->word,
            'location'       =>$this->faker->word,
            'city'           =>$this->faker->word,
            'condition'      =>$this->faker->word,
            'website'        =>$this->faker->text($maxNbChars = 20),
        ];
    }
}
