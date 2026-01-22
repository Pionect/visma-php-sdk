<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CashAccountInPaymentUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CashAccountInPaymentUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CashAccountInPaymentUpdateDto::class;
    }
}
