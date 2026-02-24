<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\FixedAssetLocationDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\FixedAssetLocationDto>
 */
class FixedAssetLocationDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'departmentId' => $this->faker->uuid(),
            'branchId' => $this->faker->uuid(),
        ];
    }

    protected function modelClass(): string
    {
        return FixedAssetLocationDto::class;
    }
}
