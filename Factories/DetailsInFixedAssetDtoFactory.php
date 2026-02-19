<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\DetailsInFixedAssetDto;
use Pionect\VismaSdk\Enums\DetailsPropertyTypeEnum;
use Pionect\VismaSdk\Enums\DetailsStatusEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DetailsInFixedAssetDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'propertyType' => $this->faker->randomElement(DetailsPropertyTypeEnum::cases()),
            'status' => $this->faker->randomElement(DetailsStatusEnum::cases()),
            'receiptDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'depreciateFromDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'acquisitionCost' => null,
            'salvageAmount' => null,
            'disposalDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'disposalPeriodId' => $this->faker->uuid(),
            'disposalMethodId' => $this->faker->numberBetween(1, 1000),
            'saleAmount' => null,
            'billNumber' => $this->faker->word(),
            'serialNumber' => $this->faker->word(),
            'disposalMethod' => null,
            'leaseAndRentInfo' => null,
        ];
    }

    protected function modelClass(): string
    {
        return DetailsInFixedAssetDto::class;
    }
}
