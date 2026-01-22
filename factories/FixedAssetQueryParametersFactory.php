<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\FixedAssetQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class FixedAssetQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'assetId' => $this->faker->uuid(),
            'classId' => $this->faker->uuid(),
            'status' => $this->faker->word(),
            'fromDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'toDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'expandAccounts' => $this->faker->boolean(),
            'pageNumber' => $this->faker->numberBetween(1, 100),
            'pageSize' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return FixedAssetQueryParameters::class;
    }
}
