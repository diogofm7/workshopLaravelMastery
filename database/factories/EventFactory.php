<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence,
            'description' => $this->faker->sentence,
            'body' => $this->faker->paragraph(4),
            'event_at' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+6 months', $timezone = null)
            //'event_at' => date('Y-m-d H:i:s')
        ];
    }
}
