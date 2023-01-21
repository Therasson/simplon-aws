<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Participant>
 */
class ParticipantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom_participant' => $this->faker->name,
            'prenom_paricipant' => $this->faker->name,
            'telepehone_participant' => $this->faker->phoneNumber(),
            'email_participant' => $this->faker->email,
        ];
    }
}
