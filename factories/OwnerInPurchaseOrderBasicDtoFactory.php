<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\OwnerInPurchaseOrderBasicDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class OwnerInPurchaseOrderBasicDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return OwnerInPurchaseOrderBasicDto::class;
    }
}
