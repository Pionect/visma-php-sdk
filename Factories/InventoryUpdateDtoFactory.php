<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventoryUpdateDto;
use Pionect\VismaSdk\Enums\InventoryStatusEnum;
use Pionect\VismaSdk\Enums\ItemClassTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\InventoryUpdateDto>
 */
class InventoryUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'inventoryNumber' => $this->faker->word(),
            'status' => $this->faker->randomElement(InventoryStatusEnum::cases()),
            'type' => $this->faker->randomElement(ItemClassTypeEnum::cases()),
            'description' => $this->faker->sentence(),
            'body' => $this->faker->word(),
            'itemClass' => $this->faker->word(),
            'postingClass' => $this->faker->word(),
            'vatCode' => $this->faker->word(),
            'defaultPrice' => null,
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
            'packaging' => PackagingUpdateDtoFactory::new()->make(),
            'supplierDetails' => [],
            'intrastat' => IntrastatUpdateDtoFactory::new()->make(),
            'crossReferences' => [],
            'defaultWarehouse' => $this->faker->word(),
            'defaultIssueFrom' => $this->faker->word(),
            'defaultReceiptTo' => $this->faker->word(),
            'kitItem' => $this->faker->boolean(),
            'note' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return InventoryUpdateDto::class;
    }
}
