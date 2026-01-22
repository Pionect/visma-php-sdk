<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PackagingUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PackagingUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'baseItemWeight' => $this->faker->word(),
            'weightUom' => $this->faker->word(),
            'baseItemVolume' => $this->faker->word(),
            'volumeUom' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PackagingUpdateDto::class;
    }
}
