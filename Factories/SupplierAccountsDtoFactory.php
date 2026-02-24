<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SupplierAccountsDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\SupplierAccountsDto>
 */
class SupplierAccountsDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'supplierAccount' => null,
            'supplierItemAccounts' => [],
        ];
    }

    protected function modelClass(): string
    {
        return SupplierAccountsDto::class;
    }
}
