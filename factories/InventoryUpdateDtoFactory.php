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
            'type' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'body' => $this->faker->word(),
            'itemClass' => null,
            'postingClass' => null,
            'vatCode' => null,
            'defaultPrice' => null,
            'baseUnit' => $this->faker->word(),
            'salesUnit' => $this->faker->word(),
            'purchaseUnit' => $this->faker->word(),
            'expenseAccrualAccount' => null,
            'inventoryAccount' => null,
            'expenseAccount' => null,
            'cogsAccount' => null,
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
            'packaging' => PackagingUpdateDtoFactory::new()->make(),
            'supplierDetails' => [],
            'intrastat' => IntrastatUpdateDtoFactory::new()->make(),
            'crossReferences' => [],
            'defaultWarehouse' => null,
            'defaultIssueFrom' => null,
            'defaultReceiptTo' => null,
            'kitItem' => $this->faker->boolean(),
            'note' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return InventoryUpdateDto::class;
    }
}
