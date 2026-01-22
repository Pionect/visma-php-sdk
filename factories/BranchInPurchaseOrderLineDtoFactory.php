<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BranchInPurchaseOrderLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BranchInPurchaseOrderLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'number' => $this->faker->word(),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return BranchInPurchaseOrderLineDto::class;
    }
}
