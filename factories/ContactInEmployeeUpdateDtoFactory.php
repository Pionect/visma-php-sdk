<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ContactInEmployeeUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ContactInEmployeeUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'firstName' => $this->faker->company(),
            'lastName' => $this->faker->company(),
            'middleName' => $this->faker->company(),
            'email' => $this->faker->safeEmail(),
            'phone1' => $this->faker->word(),
            'phone2' => $this->faker->word(),
            'phone3' => $this->faker->word(),
            'fax' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ContactInEmployeeUpdateDto::class;
    }
}
