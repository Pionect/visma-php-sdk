<?php

namespace Pionect\VismaSdk\Factories;

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
            'hold' => $this->faker->word(),
            'date' => $this->faker->word(),
            'requestOn' => $this->faker->word(),
            'customerOrder' => $this->faker->word(),
            'customerRefNo' => $this->faker->word(),
            'customer' => $this->faker->word(),
            'location' => $this->faker->word(),
            'contactId' => $this->faker->word(),
            'gln' => $this->faker->word(),
            'vatRegistrationId' => $this->faker->word(),
            'currency' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'recalculateShipment' => $this->faker->word(),
            'branchNumber' => $this->faker->word(),
            'note' => $this->faker->word(),
            'overrideNumberSeries' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SalesOrderBasicUpdateDto::class;
    }
}
