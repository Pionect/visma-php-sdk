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
            'quantity' => null,
            'unitCostInCurrency' => null,
            'costInCurrency' => null,
        ];
    }

    protected function modelClass(): string
    {
        return AddPoreceiptLineDto::class;
    }
}
