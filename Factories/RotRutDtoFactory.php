<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\RotRutDto;
use Pionect\VismaSdk\Enums\CashSaleDocumentTypeEnum;
use Pionect\VismaSdk\Enums\WorkTypeRutRotTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\RotRutDto>
 */
class RotRutDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'docType' => $this->faker->randomElement(CashSaleDocumentTypeEnum::cases()),
            'refNbr' => $this->faker->word(),
            'distributedAutomaticaly' => $this->faker->boolean(),
            'type' => $this->faker->randomElement(WorkTypeRutRotTypeEnum::cases()),
            'totalDeductableAmount' => null,
            'otherCost' => null,
            'materialCost' => null,
            'workPrice' => null,
            'distributedAmount' => null,
            'appartment' => $this->faker->word(),
            'estate' => $this->faker->word(),
            'organizationNbr' => $this->faker->word(),
            'distribution' => [],
        ];
    }

    protected function modelClass(): string
    {
        return RotRutDto::class;
    }
}
