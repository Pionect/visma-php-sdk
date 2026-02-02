<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PaymentMethodIdDescriptionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PaymentMethodIdDescriptionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return PaymentMethodIdDescriptionDto::class;
    }
}
