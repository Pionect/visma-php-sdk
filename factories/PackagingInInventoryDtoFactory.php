<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PackagingInInventoryDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PackagingInInventoryDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'baseItemWeight' => null,
            'weightUom' => $this->faker->word(),
            'baseItemVolume' => null,
            'volumeUom' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PackagingInInventoryDto::class;
    }
}
