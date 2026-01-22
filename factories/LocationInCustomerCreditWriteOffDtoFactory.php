<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LocationInCustomerCreditWriteOffDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LocationInCustomerCreditWriteOffDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'countryId' => $this->faker->uuid(),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return LocationInCustomerCreditWriteOffDto::class;
    }
}
