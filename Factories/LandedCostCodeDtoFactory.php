<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LandedCostCodeDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LandedCostCodeDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'landedCostCodeId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'landedCostType' => $this->faker->word(),
            'applicationMethod' => $this->faker->word(),
            'allocationMethod' => $this->faker->word(),
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
