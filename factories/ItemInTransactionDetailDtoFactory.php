<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ItemInTransactionDetailDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ItemInTransactionDetailDtoFactory extends Factory
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
        return ItemInTransactionDetailDto::class;
    }
}
