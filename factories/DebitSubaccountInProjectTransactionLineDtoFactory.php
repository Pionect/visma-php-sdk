<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DebitSubaccountInProjectTransactionLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DebitSubaccountInProjectTransactionLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'active' => $this->faker->boolean(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return DebitSubaccountInProjectTransactionLineDto::class;
    }
}
