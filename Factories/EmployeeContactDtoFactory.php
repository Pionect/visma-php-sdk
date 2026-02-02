<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\EmployeeContactDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class EmployeeContactDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'employeeContact' => $this->faker->word(),
            'title' => $this->faker->sentence(),
            'firstName' => $this->faker->company(),
            'midName' => $this->faker->company(),
            'lastName' => $this->faker->company(),
            'phone3' => $this->faker->word(),
            'contactId' => $this->faker->numberBetween(1, 1000),
            'name' => $this->faker->name(),
            'attention' => $this->faker->word(),
            'email' => $this->faker->safeEmail(),
            'web' => $this->faker->word(),
            'phone1' => $this->faker->word(),
            'phone2' => $this->faker->word(),
            'fax' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return EmployeeContactDto::class;
    }
}
