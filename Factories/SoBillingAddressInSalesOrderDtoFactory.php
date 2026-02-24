<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SoBillingAddressInSalesOrderDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\SoBillingAddressInSalesOrderDto>
 */
class SoBillingAddressInSalesOrderDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'overrideAddress' => $this->faker->boolean(),
            'addressId' => $this->faker->numberBetween(1, 1000),
            'addressLine1' => $this->faker->word(),
            'addressLine2' => $this->faker->word(),
            'addressLine3' => $this->faker->word(),
            'postalCode' => $this->faker->word(),
            'city' => $this->faker->word(),
            'country' => null,
            'county' => null,
        ];
    }

    protected function modelClass(): string
    {
        return SoBillingAddressInSalesOrderDto::class;
    }
}
