<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BranchInPurchaseOrderDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\BranchInPurchaseOrderDto>
 */
class BranchInPurchaseOrderDtoFactory extends Factory
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
        return BranchInPurchaseOrderDto::class;
    }
}
