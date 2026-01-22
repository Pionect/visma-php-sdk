<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ReasonCodeInInventoryReceiptLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ReasonCodeInInventoryReceiptLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return ReasonCodeInInventoryReceiptLineDto::class;
    }
}
