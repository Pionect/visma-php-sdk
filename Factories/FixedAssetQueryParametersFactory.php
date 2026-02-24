<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\FixedAssetQueryParameters;
use Pionect\VismaSdk\Enums\DetailsStatusEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\FixedAssetQueryParameters>
 */
class FixedAssetQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'assetId' => $this->faker->uuid(),
            'classId' => $this->faker->uuid(),
            'status' => $this->faker->randomElement(DetailsStatusEnum::cases()),
            'fromDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'toDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTime' => $this->faker->word(),
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
