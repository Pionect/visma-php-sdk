<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DescriptionInInventoryReceiptUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DescriptionInInventoryReceiptUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DescriptionInInventoryReceiptUpdateDto::class;
    }
}
