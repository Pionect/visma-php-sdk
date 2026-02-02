<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventoryAccountInformationDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryAccountInformationDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'expenseAccrualAccount' => null,
            'inventoryAccount' => null,
            'expenseAccount' => null,
            'cogsAccount' => null,
            'expenseNonTaxableAccount' => null,
            'expenseEuAccount' => null,
            'expenseImportAccount' => null,
            'expenseSubaccount' => null,
            'cogsSubaccount' => null,
            'salesAccount' => null,
            'salesNonTaxableAccount' => null,
            'salesEuAccount' => null,
            'salesExportAccount' => null,
            'salesSubaccount' => null,
        ];
    }

    protected function modelClass(): string
    {
        return InventoryAccountInformationDto::class;
    }
}
