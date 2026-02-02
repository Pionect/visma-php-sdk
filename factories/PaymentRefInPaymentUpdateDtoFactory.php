<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PaymentRefInPaymentUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PaymentRefInPaymentUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PaymentRefInPaymentUpdateDto::class;
    }
}
