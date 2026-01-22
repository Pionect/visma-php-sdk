<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ExpenseImportAccountInInventoryAccountInformationDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ExpenseImportAccountInInventoryAccountInformationDtoFactory extends Factory
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
        return ExpenseImportAccountInInventoryAccountInformationDto::class;
    }
}
