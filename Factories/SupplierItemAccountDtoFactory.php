<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SupplierItemAccountDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\SupplierItemAccountDto>
 */
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
