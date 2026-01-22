<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfPaymentBy;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfPaymentByFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfPaymentBy::class;
    }
}
