<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PaymentLinesUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PaymentLinesUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'cashDiscountTaken' => $this->faker->randomFloat(2, 0, 1000),
            'balanceWriteOff' => $this->faker->randomFloat(2, 0, 1000),
            'writeOffReasonCode' => $this->faker->word(),
            'crossRate' => $this->faker->randomFloat(2, 0, 1000),
            'operation' => $this->faker->word(),
            'documentType' => $this->faker->word(),
            'refNbr' => $this->faker->word(),
            'amountPaid' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }

    protected function modelClass(): string
    {
        return PaymentLinesUpdateDto::class;
    }
}
