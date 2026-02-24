<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DiscountItemPriceClassDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\DiscountItemPriceClassDto>
 */
class DiscountItemPriceClassDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'priceClassId' => $this->faker->uuid(),
        ];
    }

    protected function modelClass(): string
    {
        return DiscountItemPriceClassDto::class;
    }
}
