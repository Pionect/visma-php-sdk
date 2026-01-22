<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\SubaccountInCustomerInvoiceDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SubaccountInCustomerInvoiceDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'subaccountNumber' => $this->faker->word(),
            'subaccountId' => $this->faker->numberBetween(1, 1000),
            'description' => $this->faker->sentence(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'active' => $this->faker->boolean(),
            'segments' => [],
            'timeStamp' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'errorInfo' => $this->faker->word(),
            'metadata' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SubaccountInCustomerInvoiceDto::class;
    }
}
