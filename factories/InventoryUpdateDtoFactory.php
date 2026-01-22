<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventoryUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'inventoryNumber' => $this->faker->word(),
            'status' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'body' => $this->faker->word(),
            'itemClass' => $this->faker->word(),
            'postingClass' => $this->faker->word(),
            'vatCode' => $this->faker->word(),
            'defaultPrice' => $this->faker->word(),
            'baseUnit' => $this->faker->word(),
            'salesUnit' => $this->faker->word(),
            'purchaseUnit' => $this->faker->word(),
            'expenseAccrualAccount' => $this->faker->word(),
            'inventoryAccount' => $this->faker->word(),
            'expenseAccount' => $this->faker->word(),
            'cogsAccount' => $this->faker->word(),
            'expenseNonTaxableAccount' => $this->faker->word(),
            'expenseEuAccount' => $this->faker->word(),
            'expenseImportAccount' => $this->faker->word(),
            'expenseSubaccount' => [],
            'cogsSubaccount' => [],
            'salesAccount' => $this->faker->word(),
            'salesNonTaxableAccount' => $this->faker->word(),
            'salesEuAccount' => $this->faker->word(),
            'salesExportAccount' => $this->faker->word(),
            'salesSubaccount' => [],
            'attributeLines' => [],
            'packaging' => $this->faker->word(),
            'supplierDetails' => [],
            'intrastat' => $this->faker->word(),
            'crossReferences' => [],
            'defaultWarehouse' => $this->faker->word(),
            'defaultIssueFrom' => $this->faker->word(),
            'defaultReceiptTo' => $this->faker->word(),
            'kitItem' => $this->faker->word(),
            'note' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return InventoryUpdateDto::class;
    }
}
