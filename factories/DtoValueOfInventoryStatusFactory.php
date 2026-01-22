<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfInventoryStatus;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfInventoryStatusFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfInventoryStatus::class;
    }
}
