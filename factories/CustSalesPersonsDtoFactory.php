<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustSalesPersonsDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustSalesPersonsDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'salePersonId' => $this->faker->uuid(),
            'name' => $this->faker->name(),
            'locationId' => $this->faker->uuid(),
            'locationName' => $this->faker->company(),
            'commisionPct' => null,
            'isDefault' => $this->faker->boolean(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustSalesPersonsDto::class;
    }
}
