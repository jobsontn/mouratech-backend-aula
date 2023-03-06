<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Get a new Faker instance.
     *
     * @return \Faker\Generator
     */
    public function withFaker()
    {
        return \Faker\Factory::create('pt_BR');
    }
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $gender = $this->faker->randomElement(['male', 'female']);
        $genero = [
            'male' => 'Masculino', 
            'female' => 'Feminino',
        ];
        $last_name = $this->faker->lastName() . ' ' . $this->faker->lastName();

        return [
            'enrollment' => '20131EWBJ' . sprintf('%04d',$this->faker->unique()->numberBetween(1, 9999)),
            'CPF' => $this->faker->valid()->cpf,
            'name' => $this->faker->firstName($gender) . ' ' . $last_name,
            'motherName' => $this->faker->firstName('female') . ' ' . $last_name,
            'fatherName' => $this->faker->firstName('male') . ' ' . $last_name,
            'birthday' => $this->faker->dateTimeBetween('-32 years', '-18 years')->format('Y-m-d'),
            'gender' => $genero[$gender],
            'email' => $this->faker->unique()->safeEmail,
            'cellphone' => sprintf('(%s)%s', $this->faker->areaCode, $this->faker->landline),
            'githubProfile' => 'https://github.com/' . $this->faker->userName,
            'campusName' => 'Campus Belo Jardim',
            'courseName' => 'Engenharia de Software',
            'currentPeriod' => $this->faker->numberBetween(1, 8),
            'group' => $this->faker->numberBetween(1, 10),
        ];
    }
}
