<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfNullableOfEmployeeStatus;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfNullableOfEmployeeStatusFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfNullableOfEmployeeStatus::class;
    }
}
