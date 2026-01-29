<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CreditSubaccountInProjectTransactionLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CreditSubaccountInProjectTransactionLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'active' => $this->faker->boolean(),
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return CreditSubaccountInProjectTransactionLineDto::class;
    }
}
