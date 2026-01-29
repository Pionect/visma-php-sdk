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
            'weightUom' => WeightUOMInPackagingUpdateDtoFactory::new()->make(),
            'baseItemVolume' => BaseItemVolumeInPackagingUpdateDtoFactory::new()->make(),
            'volumeUom' => VolumeUOMInPackagingUpdateDtoFactory::new()->make(),
        ];
    }

    protected function modelClass(): string
    {
        return PackagingUpdateDto::class;
    }
}
