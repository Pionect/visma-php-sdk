<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\EmployeeContactUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\EmployeeContactUpdateDto>
 */
class EmployeeContactUpdateDtoFactory extends Factory
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
        return EmployeeContactUpdateDto::class;
    }
}
