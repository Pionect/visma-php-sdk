<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ExpenseEuAccountInInventoryAccountInformationDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\ExpenseEuAccountInInventoryAccountInformationDto>
 */
class ExpenseEuAccountInInventoryAccountInformationDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'type' => $this->faker->word(),
            'number' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return ExpenseEuAccountInInventoryAccountInformationDto::class;
    }
}
