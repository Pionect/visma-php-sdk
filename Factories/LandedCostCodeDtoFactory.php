<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LandedCostCodeDto;
use Pionect\VismaSdk\Enums\LandedCostCodeAllocationMethodEnum;
use Pionect\VismaSdk\Enums\LandedCostCodeApplicationMethodEnum;
use Pionect\VismaSdk\Enums\LandedCostCodeLandedCostTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LandedCostCodeDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'landedCostCodeId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'landedCostType' => $this->faker->randomElement(LandedCostCodeLandedCostTypeEnum::cases()),
            'applicationMethod' => $this->faker->randomElement(LandedCostCodeApplicationMethodEnum::cases()),
            'allocationMethod' => $this->faker->randomElement(LandedCostCodeAllocationMethodEnum::cases()),
            'supplierId' => $this->faker->uuid(),
            'supplierLocationId' => $this->faker->uuid(),
            'terms' => $this->faker->word(),
            'reasonCode' => $this->faker->word(),
            'landedCostAccrualAccount' => $this->faker->word(),
            'landedCostAccrualSubaccount' => $this->faker->word(),
            'vatCategory' => $this->faker->word(),
            'landedCostVarianceAccount' => $this->faker->word(),
            'landedCostVarianceSubaccount' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return LandedCostCodeDto::class;
    }
}
