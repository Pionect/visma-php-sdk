<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PostPeriodInInventoryReceiptUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PostPeriodInInventoryReceiptUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PostPeriodInInventoryReceiptUpdateDto::class;
    }
}
