<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PackagingUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PackagingUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'baseItemWeight' => null,
            'weightUom' => null,
            'baseItemVolume' => null,
            'volumeUom' => null,
        ];
    }

    protected function modelClass(): string
    {
        return PackagingUpdateDto::class;
    }
}
