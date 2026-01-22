<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfAccountTypes;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfAccountTypesFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfAccountTypes::class;
    }
}
