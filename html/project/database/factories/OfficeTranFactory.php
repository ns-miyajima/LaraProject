<?php

namespace Database\Factories;
use App\Models\OfficeMaster;
use App\Models\OfficeTran;


use Illuminate\Database\Eloquent\Factories\Factory;

class OfficeTranFactory extends Factory
{
    protected $model = OfficeTran::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $id = OfficeMaster::all()->random(1)[0]->id;
        return [
            'id' => $this->faker->country,
            'title' => $this->faker->city,
            'comment' => $this->faker->sentence,
            'id'=> $id,
        ];
    }
}
