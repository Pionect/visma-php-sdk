<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerPaymentMethodDetailDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerPaymentMethodDetailDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'detailId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerPaymentMethodDetailDto::class;
    }
}
