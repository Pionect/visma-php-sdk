<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CurrencyInPaymentUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CurrencyInPaymentUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CurrencyInPaymentUpdateDto::class;
    }
}
