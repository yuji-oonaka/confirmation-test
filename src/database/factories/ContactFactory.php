<?php

namespace Database\Factories;
use App\Models\Contact;
use App\Models\Category;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    protected $model = Contact::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => Category::inRandomOrder()->first()->id,
            'last_name' => $this->faker->lastName(),
            'first_name' => $this->faker->firstName(),
            'gender'=> $this->faker->randomElement([1,1,1,1,2,2,2,2,3]),
            'email' => $this->faker->unique()->safeEmail(),
            'tel' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'building'=> $this->faker->optional()->secondaryAddress(),
            'detail' => $this->faker->realtext(120)
        ];
    }
}
