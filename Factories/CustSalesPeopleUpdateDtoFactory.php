<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustSalesPeopleUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustSalesPeopleUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'customerId' => $this->faker->uuid(),
            'locationId' => $this->faker->uuid(),
            'commissionPct' => null,
        ];
    }

    protected function modelClass(): string
    {
        return CustSalesPeopleUpdateDto::class;
    }
}
