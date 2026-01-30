<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SupplierItemAccountDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierItemAccountDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'supplierItemId' => $this->faker->uuid(),
            'itemId' => $this->faker->uuid(),
            'accountId' => $this->faker->uuid(),
            'subaccount' => null,
        ];
    }

    protected function modelClass(): string
    {
        return SupplierItemAccountDto::class;
    }
}
