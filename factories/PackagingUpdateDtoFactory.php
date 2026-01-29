<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PackagingUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PackagingUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'baseItemWeight' => BaseItemWeightInPackagingUpdateDtoFactory::new()->make(),
            'weightUom' => $this->faker->word(),
            'baseItemVolume' => BaseItemVolumeInPackagingUpdateDtoFactory::new()->make(),
            'volumeUom' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PackagingUpdateDto::class;
    }
}
