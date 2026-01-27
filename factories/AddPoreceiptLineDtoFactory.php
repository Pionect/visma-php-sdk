<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\AddPoreceiptLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class AddPoreceiptLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'poReceiptNumber' => $this->faker->word(),
            'poReceiptLineNumber' => $this->faker->numberBetween(1, 100),
            'quantity' => $this->faker->randomFloat(2, 0, 1000),
            'unitCostInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'costInCurrency' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }

    protected function modelClass(): string
    {
        return AddPoreceiptLineDto::class;
    }
}
