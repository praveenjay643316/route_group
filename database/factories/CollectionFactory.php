<?php

namespace Database\Factories;

use App\Models\Collection;
use Illuminate\Database\Eloquent\Factories\Factory;

class CollectionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Collection::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
         return [
            'name' => $this->faker->text(50),
            'email' => $this->faker->unique()->safeEmail,
            'price' => $this->faker->numerify('####'),
            'active'=>$this->faker->numerify('##'),     
        ];
    }
}
