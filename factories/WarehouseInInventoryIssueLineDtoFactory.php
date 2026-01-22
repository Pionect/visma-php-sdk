<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\WarehouseInInventoryIssueLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class WarehouseInInventoryIssueLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return WarehouseInInventoryIssueLineDto::class;
    }
}
