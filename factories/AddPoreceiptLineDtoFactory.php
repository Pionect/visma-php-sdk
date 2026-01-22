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
            'poReceiptLineNumber' => $this->faker->word(),
            'quantity' => $this->faker->word(),
            'unitCostInCurrency' => $this->faker->word(),
            'costInCurrency' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return AddPoreceiptLineDto::class;
    }
}
