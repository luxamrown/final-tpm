<?php

namespace Database\Factories;

use App\Models\Group;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GroupData>
 */
class GroupDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $fixUsername = $this->faker->userName();
        return [
                // 'group_id' => Group::factory()->create()->id - 10,
                'group_id' => $this->faker->unique()->numberBetween(1, Group::count()),
                'fullname' => $this->faker->name(),
                'email' => $this->faker->email(),
                'whatsapp' => $this->faker->phoneNumber(),
                'line_id' => $fixUsername,
                'github' => $fixUsername,
                'birthplace' => $this->faker->city(),
                'birthdate' => $this->faker->date(),
                'cv_file' => 'BNCCflazz.jpeg',
                'flazz_file' => 'BNCCflazz.jpeg',
                'idcard_file' => 'BNCCflazz.jpeg',
                'regist_date' => date("Y-m-d",time())
        ];
    }
}
