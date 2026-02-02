<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\OrderTypeInKitAssemblyLinkInsertDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class OrderTypeInKitAssemblyLinkInsertDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return OrderTypeInKitAssemblyLinkInsertDto::class;
    }
}
