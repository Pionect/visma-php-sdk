<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\FixedAssetDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class FixedAssetDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'assetId' => $this->faker->uuid(),
            'recordType' => $this->faker->word(),
            'parentAssetId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'classId' => $this->faker->uuid(),
            'isTangible' => $this->faker->boolean(),
            'quantity' => $this->faker->randomFloat(2, 0, 1000),
            'depreciable' => $this->faker->boolean(),
            'usefulLife' => $this->faker->randomFloat(2, 0, 1000),
            'accounts' => $this->faker->word(),
            'details' => $this->faker->word(),
            'bookBalance' => $this->faker->word(),
            'location' => $this->faker->word(),
            'propertyTax' => $this->faker->word(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'errorInfo' => $this->faker->word(),
            'metadata' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return FixedAssetDto::class;
    }
}
