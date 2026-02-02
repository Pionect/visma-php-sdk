<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\OrderLineNumberInKitAssemblyLinkInsertDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class OrderLineNumberInKitAssemblyLinkInsertDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return OrderLineNumberInKitAssemblyLinkInsertDto::class;
    }
}
