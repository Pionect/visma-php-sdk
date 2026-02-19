<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\VatCategoryLineDto;
use Pionect\VismaSdk\Enums\VatCategoryLineCalculateOnEnum;
use Pionect\VismaSdk\Enums\VatCategoryLineCashDiscountEnum;
use Pionect\VismaSdk\Enums\VatCategoryLineTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class VatCategoryLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'vatId' => $this->faker->uuid(),
            'vendorCd' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'type' => $this->faker->randomElement(VatCategoryLineTypeEnum::cases()),
            'calculateOn' => $this->faker->randomElement(VatCategoryLineCalculateOnEnum::cases()),
            'cashDiscount' => $this->faker->randomElement(VatCategoryLineCashDiscountEnum::cases()),
            'vatRates' => [],
        ];
    }

    protected function modelClass(): string
    {
        return VatCategoryLineDto::class;
    }
}
