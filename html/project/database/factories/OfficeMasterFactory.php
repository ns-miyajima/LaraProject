<?php

namespace Database\Factories;
use App\Models\OfficeMaster;

use Illuminate\Database\Eloquent\Factories\Factory;

class OfficeMasterFactory extends Factory
{
    protected $model = OfficeMaster::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->userName,
            'phonenumber' => $this->faker->sentence(4),
            'gender' => $this->faker->sentence,
        ];
    }
}
