<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\SalesOrderLineDto;
use Pionect\VismaSdk\Enums\SalesOrderLineOperationEnum;
use Pionect\VismaSdk\Enums\SalesOrderLinePoSourceEnum;
use Pionect\VismaSdk\Enums\SalesOrderLineShipCompleteEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SalesOrderLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'invoiceNbr' => $this->faker->word(),
            'operation' => $this->faker->randomElement(SalesOrderLineOperationEnum::cases()),
            'freeItem' => $this->faker->boolean(),
            'requestedOn' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'shipOn' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'shipComplete' => $this->faker->randomElement(SalesOrderLineShipCompleteEnum::cases()),
            'undershipThreshold' => null,
            'overshipThreshold' => null,
            'completed' => $this->faker->boolean(),
            'markForPo' => $this->faker->boolean(),
            'poSource' => $this->faker->randomElement(SalesOrderLinePoSourceEnum::cases()),
            'lotSerialNbr' => $this->faker->word(),
            'expirationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'reasonCode' => $this->faker->word(),
            'salesPerson' => null,
            'taxCategory' => $this->faker->word(),
            'commissionable' => $this->faker->boolean(),
            'alternateId' => $this->faker->uuid(),
            'projectTask' => $this->faker->numberBetween(1, 100),
            'projectTaskCd' => $this->faker->word(),
            'subaccount' => null,
            'externalLink' => $this->faker->word(),
            'isRotRutDeductible' => $this->faker->boolean(),
            'lineNbr' => $this->faker->numberBetween(1, 100),
            'sortOrder' => $this->faker->numberBetween(1, 100),
            'inventory' => InventoryNumberDescriptionDtoFactory::new()->make(),
            'warehouse' => WarehouseIdDescriptionDtoFactory::new()->make(),
            'uom' => $this->faker->word(),
            'quantity' => null,
            'qtyOnShipments' => null,
            'openQty' => null,
            'unitCost' => null,
            'unitPrice' => null,
            'unitPriceInBaseCurrency' => null,
            'discountCode' => $this->faker->word(),
            'discountPercent' => null,
            'discountAmount' => null,
            'manualDiscount' => $this->faker->boolean(),
            'discUnitPrice' => null,
            'extPrice' => null,
            'unbilledAmount' => null,
            'lineDescription' => $this->faker->sentence(),
            'branchNumber' => BranchNumberDtoFactory::new()->make(),
            'note' => $this->faker->word(),
            'attachments' => [],
        ];
    }

    protected function modelClass(): string
    {
        return SalesOrderLineDto::class;
    }
}
