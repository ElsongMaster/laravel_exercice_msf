<?php

namespace Database\Factories;

use App\Models\TypeFormation;
use Illuminate\Database\Eloquent\Factories\Factory;

class TypeFormationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TypeFormation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          "nom"=>$this->faker->randomElement($array = array ('Coding School','Marketing Lab','AWS', 'WebMaster')) 

        ];
    }
}
