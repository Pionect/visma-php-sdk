<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DiscountCustomerPriceClassDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\DiscountCustomerPriceClassDto>
 */
class DiscountCustomerPriceClassDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'priceClassId' => $this->faker->uuid(),
        ];
    }

    protected function modelClass(): string
    {
        return DiscountCustomerPriceClassDto::class;
    }
}
