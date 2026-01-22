<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DefaultReceiptToInInventoryUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DefaultReceiptToInInventoryUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DefaultReceiptToInInventoryUpdateDto::class;
    }
}
