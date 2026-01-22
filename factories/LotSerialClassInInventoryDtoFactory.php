<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LotSerialClassInInventoryDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LotSerialClassInInventoryDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return LotSerialClassInInventoryDto::class;
    }
}
