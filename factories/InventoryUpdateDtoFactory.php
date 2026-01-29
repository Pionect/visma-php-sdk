<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventoryUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'inventoryNumber' => InventoryNumberInInventoryUpdateDtoFactory::new()->make(),
            'status' => $this->faker->word(),
            'type' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'body' => $this->faker->word(),
            'itemClass' => ItemClassInInventoryUpdateDtoFactory::new()->make(),
            'postingClass' => PostingClassInInventoryUpdateDtoFactory::new()->make(),
            'vatCode' => VatCodeInInventoryUpdateDtoFactory::new()->make(),
            'defaultPrice' => DefaultPriceInInventoryUpdateDtoFactory::new()->make(),
            'baseUnit' => $this->faker->word(),
            'salesUnit' => $this->faker->word(),
            'purchaseUnit' => $this->faker->word(),
            'expenseAccrualAccount' => ExpenseAccrualAccountInInventoryUpdateDtoFactory::new()->make(),
            'inventoryAccount' => InventoryAccountInInventoryUpdateDtoFactory::new()->make(),
            'expenseAccount' => ExpenseAccountInInventoryUpdateDtoFactory::new()->make(),
            'cogsAccount' => CogsAccountInInventoryUpdateDtoFactory::new()->make(),
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
            'defaultWarehouse' => DefaultWarehouseInInventoryUpdateDtoFactory::new()->make(),
            'defaultIssueFrom' => DefaultIssueFromInInventoryUpdateDtoFactory::new()->make(),
            'defaultReceiptTo' => DefaultReceiptToInInventoryUpdateDtoFactory::new()->make(),
            'kitItem' => $this->faker->boolean(),
            'note' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return InventoryUpdateDto::class;
    }
}
