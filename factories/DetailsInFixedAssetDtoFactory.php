<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\DetailsInFixedAssetDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DetailsInFixedAssetDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'propertyType' => $this->faker->word(),
            'status' => $this->faker->word(),
            'receiptDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'depreciateFromDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'acquisitionCost' => $this->faker->randomFloat(2, 0, 1000),
            'salvageAmount' => $this->faker->randomFloat(2, 0, 1000),
            'disposalDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'disposalPeriodId' => $this->faker->uuid(),
            'disposalMethodId' => $this->faker->numberBetween(1, 1000),
            'saleAmount' => $this->faker->randomFloat(2, 0, 1000),
            'billNumber' => $this->faker->word(),
            'serialNumber' => $this->faker->word(),
            'disposalMethod' => $this->faker->word(),
            'leaseAndRentInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DetailsInFixedAssetDto::class;
    }
}
