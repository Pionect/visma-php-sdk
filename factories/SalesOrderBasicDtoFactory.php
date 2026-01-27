<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\SalesOrderBasicDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SalesOrderBasicDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lines' => [],
            'orderType' => $this->faker->word(),
            'orderNo' => $this->faker->word(),
            'status' => $this->faker->word(),
            'hold' => $this->faker->boolean(),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'requestOn' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'customerOrder' => $this->faker->word(),
            'customerRefNo' => $this->faker->word(),
            'customer' => $this->faker->word(),
            'contactId' => $this->faker->numberBetween(1, 1000),
            'location' => $this->faker->word(),
            'currency' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'orderTotal' => $this->faker->randomFloat(2, 0, 1000),
            'orderTotalInBaseCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'vatTaxableTotal' => $this->faker->randomFloat(2, 0, 1000),
            'vatTaxableTotalInBaseCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'vatExemptTotal' => $this->faker->randomFloat(2, 0, 1000),
            'vatExemptTotalInBaseCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'taxTotal' => $this->faker->randomFloat(2, 0, 1000),
            'taxTotalInBaseCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'exchangeRate' => $this->faker->randomFloat(2, 0, 1000),
            'discountTotal' => $this->faker->randomFloat(2, 0, 1000),
            'discountTotalInBaseCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'branchNumber' => $this->faker->word(),
            'note' => $this->faker->word(),
            'attachments' => [],
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SalesOrderBasicDto::class;
    }
}
