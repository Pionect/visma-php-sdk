<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DiscountCustomer2dto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\DiscountCustomer2dto>
 */
class DiscountCustomer2dtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'customer' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DiscountCustomer2dto::class;
    }
}
