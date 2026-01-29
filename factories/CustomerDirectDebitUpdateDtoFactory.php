<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CustomerDirectDebitUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerDirectDebitUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'id' => $this->faker->word(),
            'mandateId' => $this->faker->uuid(),
            'mandateDescription' => $this->faker->sentence(),
            'dateOfSignature' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'isDefault' => $this->faker->boolean(),
            'oneTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'bic' => $this->faker->word(),
            'iban' => $this->faker->word(),
            'lastCollectionDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'maxAmount' => $this->faker->randomFloat(2, 0, 1000),
            'expirationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'branch' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerDirectDebitUpdateDto::class;
    }
}
