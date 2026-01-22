<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfInventoryType;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfInventoryTypeFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfInventoryType::class;
    }
}
