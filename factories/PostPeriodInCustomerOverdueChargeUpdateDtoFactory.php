<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PostPeriodInCustomerOverdueChargeUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PostPeriodInCustomerOverdueChargeUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PostPeriodInCustomerOverdueChargeUpdateDto::class;
    }
}
