<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfAccountUsedForPayment;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfAccountUsedForPaymentFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfAccountUsedForPayment::class;
    }
}
