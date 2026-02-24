<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ChangeEmployeeNrActionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\ChangeEmployeeNrActionDto>
 */
class ChangeEmployeeNrActionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'employeeNr' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ChangeEmployeeNrActionDto::class;
    }
}
