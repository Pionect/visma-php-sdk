<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CustomerContractUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerContractUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'contractId' => $this->faker->word(),
            'contractTemplate' => $this->faker->word(),
            'customer' => $this->faker->word(),
            'location' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'setupDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'activationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'expirationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'massRenewal' => $this->faker->word(),
            'renewalPoint' => $this->faker->word(),
            'gracePeriod' => $this->faker->word(),
            'currency' => $this->faker->word(),
            'invoiceTo' => $this->faker->word(),
            'invoiceAccount' => $this->faker->word(),
            'invoiceLocation' => $this->faker->word(),
            'owner' => $this->faker->word(),
            'salesPerson' => $this->faker->word(),
            'details' => [],
            'attributeLines' => [],
        ];
    }

    protected function modelClass(): string
    {
        return CustomerContractUpdateDto::class;
    }
}
