<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BranchInPurchaseOrderBasicDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BranchInPurchaseOrderBasicDtoFactory extends Factory
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
        return BranchInPurchaseOrderBasicDto::class;
    }
}
