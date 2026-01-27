<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\SalesOrderBasicUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SalesOrderBasicUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lines' => [],
            'orderType' => $this->faker->word(),
            'orderNumber' => $this->faker->word(),
            'hold' => $this->faker->boolean(),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'requestOn' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'customerOrder' => $this->faker->word(),
            'customerRefNo' => $this->faker->word(),
            'customer' => $this->faker->word(),
            'location' => $this->faker->word(),
            'contactId' => $this->faker->numberBetween(1, 1000),
            'gln' => $this->faker->word(),
            'vatRegistrationId' => $this->faker->word(),
            'currency' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'recalculateShipment' => $this->faker->boolean(),
            'branchNumber' => $this->faker->word(),
            'note' => $this->faker->word(),
            'overrideNumberSeries' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return SalesOrderBasicUpdateDto::class;
    }
}
