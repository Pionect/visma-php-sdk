<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PaymentAmountInPaymentUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PaymentAmountInPaymentUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => null,
        ];
    }

    protected function modelClass(): string
    {
        return PaymentAmountInPaymentUpdateDto::class;
    }
}
