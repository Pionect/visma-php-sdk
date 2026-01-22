<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerDefaultPaymentMethodUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerDefaultPaymentMethodUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'paymentMethodId' => $this->faker->word(),
            'isDefault' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerDefaultPaymentMethodUpdateDto::class;
    }
}
