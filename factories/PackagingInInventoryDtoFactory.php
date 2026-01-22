<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PackagingInInventoryDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PackagingInInventoryDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'baseItemWeight' => $this->faker->randomFloat(2, 0, 1000),
            'weightUom' => $this->faker->word(),
            'baseItemVolume' => $this->faker->randomFloat(2, 0, 1000),
            'volumeUom' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PackagingInInventoryDto::class;
    }
}
