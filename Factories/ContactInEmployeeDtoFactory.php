<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ContactInEmployeeDto;
use Pionect\VismaSdk\Enums\ContactTitleEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\ContactInEmployeeDto>
 */
class ContactInEmployeeDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'employeeContact' => $this->faker->word(),
            'title' => $this->faker->randomElement(ContactTitleEnum::cases()),
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
        return ContactInEmployeeDto::class;
    }
}
