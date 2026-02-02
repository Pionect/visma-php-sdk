<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LocationInFixedAssetDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LocationInFixedAssetDtoFactory extends Factory
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
        return LocationInFixedAssetDto::class;
    }
}
