<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PaymentLinesUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PaymentLinesUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'cashDiscountTaken' => $this->faker->word(),
            'balanceWriteOff' => $this->faker->word(),
            'writeOffReasonCode' => $this->faker->word(),
            'crossRate' => $this->faker->word(),
            'operation' => $this->faker->word(),
            'documentType' => $this->faker->word(),
            'refNbr' => $this->faker->word(),
            'amountPaid' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PaymentLinesUpdateDto::class;
    }
}
