<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SupplierAccountsDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierAccountsDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'supplierAccount' => SupplierAccountInSupplierAccountsDtoFactory::new()->make(),
            'supplierItemAccounts' => [],
        ];
    }

    protected function modelClass(): string
    {
        return SupplierAccountsDto::class;
    }
}
