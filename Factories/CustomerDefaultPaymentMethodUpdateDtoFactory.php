<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerDefaultPaymentMethodUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerDefaultPaymentMethodUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'paymentMethodId' => $this->faker->uuid(),
            'isDefault' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerDefaultPaymentMethodUpdateDto::class;
    }
}
