<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PaymentMethodDto;
use Pionect\VismaSdk\Enums\PaymentMethodMeansOfPaymentEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PaymentMethodDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'paymentMethodId' => $this->faker->uuid(),
            'active' => $this->faker->boolean(),
            'meansOfPayment' => $this->faker->randomElement(PaymentMethodMeansOfPaymentEnum::cases()),
            'description' => $this->faker->sentence(),
            'useInAp' => $this->faker->boolean(),
            'details' => [],
        ];
    }

    protected function modelClass(): string
    {
        return PaymentMethodDto::class;
    }
}
