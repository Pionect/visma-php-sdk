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
            'quantity' => null,
            'depreciable' => $this->faker->boolean(),
            'usefulLife' => null,
            'accounts' => null,
            'details' => null,
            'bookBalance' => null,
            'location' => null,
            'propertyTax' => null,
            'type' => null,
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return FixedAssetDto::class;
    }
}
