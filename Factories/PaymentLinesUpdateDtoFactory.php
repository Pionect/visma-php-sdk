<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PaymentLinesUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PaymentLinesUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'cashDiscountTaken' => null,
            'balanceWriteOff' => null,
            'writeOffReasonCode' => $this->faker->word(),
            'crossRate' => null,
            'operation' => $this->faker->word(),
            'documentType' => $this->faker->word(),
            'refNbr' => $this->faker->word(),
            'amountPaid' => null,
        ];
    }

    protected function modelClass(): string
    {
        return PaymentLinesUpdateDto::class;
    }
}
