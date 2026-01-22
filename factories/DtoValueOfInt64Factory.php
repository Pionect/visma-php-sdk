<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfInt64;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfInt64Factory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfInt64::class;
    }
}
