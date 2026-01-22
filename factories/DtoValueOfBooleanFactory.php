<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfBoolean;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfBooleanFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfBoolean::class;
    }
}
