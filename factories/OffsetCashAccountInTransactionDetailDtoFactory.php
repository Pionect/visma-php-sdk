<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\OffsetCashAccountInTransactionDetailDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class OffsetCashAccountInTransactionDetailDtoFactory extends Factory
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
        return OffsetCashAccountInTransactionDetailDto::class;
    }
}
