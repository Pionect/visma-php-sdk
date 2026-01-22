<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ExpenseAccountInInventoryAccountInformationDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ExpenseAccountInInventoryAccountInformationDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'number' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return ExpenseAccountInInventoryAccountInformationDto::class;
    }
}
