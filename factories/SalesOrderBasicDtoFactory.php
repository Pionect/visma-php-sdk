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
            'customer' => null,
            'contactId' => $this->faker->numberBetween(1, 1000),
            'location' => null,
            'currency' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'orderTotal' => null,
            'orderTotalInBaseCurrency' => null,
            'vatTaxableTotal' => null,
            'vatTaxableTotalInBaseCurrency' => null,
            'vatExemptTotal' => null,
            'vatExemptTotalInBaseCurrency' => null,
            'taxTotal' => null,
            'taxTotalInBaseCurrency' => null,
            'exchangeRate' => null,
            'discountTotal' => null,
            'discountTotalInBaseCurrency' => null,
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
