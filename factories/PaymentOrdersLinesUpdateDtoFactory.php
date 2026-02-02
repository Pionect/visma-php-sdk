<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PaymentOrdersLinesUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PaymentOrdersLinesUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'orderType' => $this->faker->word(),
            'orderNumber' => $this->faker->word(),
            'appliedToOrder' => null,
        ];
    }

    protected function modelClass(): string
    {
        return PaymentOrdersLinesUpdateDto::class;
    }
}
