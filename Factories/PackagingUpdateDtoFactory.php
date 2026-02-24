<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PackagingUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\PackagingUpdateDto>
 */
class PackagingUpdateDtoFactory extends Factory
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
        return PackagingUpdateDto::class;
    }
}
