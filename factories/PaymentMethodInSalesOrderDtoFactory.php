<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PaymentMethodInSalesOrderDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PaymentMethodInSalesOrderDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return PaymentMethodInSalesOrderDto::class;
    }
}
