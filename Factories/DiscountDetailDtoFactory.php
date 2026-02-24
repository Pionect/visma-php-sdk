<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DiscountDetailDto;
use Pionect\VismaSdk\Enums\DiscountDetailTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\DiscountDetailDto>
 */
class DiscountDetailDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lineNbr' => $this->faker->numberBetween(1, 100),
            'skipDiscount' => $this->faker->boolean(),
            'discountCode' => $this->faker->word(),
            'sequanceId' => $this->faker->uuid(),
            'type' => $this->faker->randomElement(DiscountDetailTypeEnum::cases()),
            'manualDiscount' => $this->faker->boolean(),
            'discountableAmt' => null,
            'discountableQty' => null,
            'discountAmt' => null,
            'discount' => null,
            'freeItem' => $this->faker->numberBetween(1, 100),
            'freeItemQty' => null,
        ];
    }

    protected function modelClass(): string
    {
        return DiscountDetailDto::class;
    }
}
