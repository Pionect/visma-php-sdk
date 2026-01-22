<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfCustomerStatus;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfCustomerStatusFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfCustomerStatus::class;
    }
}
