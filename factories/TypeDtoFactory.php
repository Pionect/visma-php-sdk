<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TypeDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TypeDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'assetTypeId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return TypeDto::class;
    }
}
