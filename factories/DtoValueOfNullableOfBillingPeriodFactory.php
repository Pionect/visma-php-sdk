<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfNullableOfBillingPeriod;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfNullableOfBillingPeriodFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfNullableOfBillingPeriod::class;
    }
}
