<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\OwnerInPurchaseOrderDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class OwnerInPurchaseOrderDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return OwnerInPurchaseOrderDto::class;
    }
}
