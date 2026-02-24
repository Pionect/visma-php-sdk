<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TypeInFixedAssetDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\TypeInFixedAssetDto>
 */
class TypeInFixedAssetDtoFactory extends Factory
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
        return TypeInFixedAssetDto::class;
    }
}
