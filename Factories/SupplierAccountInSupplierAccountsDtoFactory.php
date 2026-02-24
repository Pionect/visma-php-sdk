<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SupplierAccountInSupplierAccountsDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\SupplierAccountInSupplierAccountsDto>
 */
class SupplierAccountInSupplierAccountsDtoFactory extends Factory
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
        return SupplierAccountInSupplierAccountsDto::class;
    }
}
