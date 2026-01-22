<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfNullableOfProjectTransactionStatus;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfNullableOfProjectTransactionStatusFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfNullableOfProjectTransactionStatus::class;
    }
}
