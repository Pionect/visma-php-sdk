<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\OrderNumberInKitAssemblyLinkInsertDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class OrderNumberInKitAssemblyLinkInsertDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return OrderNumberInKitAssemblyLinkInsertDto::class;
    }
}
