<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SupplierAccountDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierAccountDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'number' => $this->faker->word(),
            'name' => $this->faker->name(),
            'accountId' => $this->faker->uuid(),
            'subaccount' => null,
        ];
    }

    protected function modelClass(): string
    {
        return SupplierAccountDto::class;
    }
}
