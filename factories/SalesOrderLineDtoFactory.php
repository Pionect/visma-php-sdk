<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\SalesOrderLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SalesOrderLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'invoiceNbr' => $this->faker->word(),
            'operation' => $this->faker->word(),
            'freeItem' => $this->faker->boolean(),
            'requestedOn' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'shipOn' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'shipComplete' => $this->faker->word(),
            'undershipThreshold' => $this->faker->randomFloat(2, 0, 1000),
            'overshipThreshold' => $this->faker->randomFloat(2, 0, 1000),
            'completed' => $this->faker->boolean(),
            'markForPo' => $this->faker->boolean(),
            'poSource' => $this->faker->word(),
            'lotSerialNbr' => $this->faker->word(),
            'expirationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'reasonCode' => $this->faker->word(),
            'salesPerson' => $this->faker->word(),
            'taxCategory' => $this->faker->word(),
            'commissionable' => $this->faker->boolean(),
            'alternateId' => $this->faker->uuid(),
            'projectTask' => $this->faker->numberBetween(1, 100),
            'projectTaskCd' => $this->faker->word(),
            'subaccount' => $this->faker->word(),
            'externalLink' => $this->faker->word(),
            'isRotRutDeductible' => $this->faker->boolean(),
            'lineNbr' => $this->faker->numberBetween(1, 100),
            'sortOrder' => $this->faker->numberBetween(1, 100),
            'inventory' => $this->faker->word(),
            'warehouse' => $this->faker->word(),
            'uom' => $this->faker->word(),
            'quantity' => $this->faker->randomFloat(2, 0, 1000),
            'qtyOnShipments' => $this->faker->randomFloat(2, 0, 1000),
            'openQty' => $this->faker->randomFloat(2, 0, 1000),
            'unitCost' => $this->faker->randomFloat(2, 0, 1000),
            'unitPrice' => $this->faker->randomFloat(2, 0, 1000),
            'unitPriceInBaseCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'discountCode' => $this->faker->word(),
            'discountPercent' => $this->faker->randomFloat(2, 0, 1000),
            'discountAmount' => $this->faker->randomFloat(2, 0, 1000),
            'manualDiscount' => $this->faker->boolean(),
            'discUnitPrice' => $this->faker->randomFloat(2, 0, 1000),
            'extPrice' => $this->faker->randomFloat(2, 0, 1000),
            'unbilledAmount' => $this->faker->randomFloat(2, 0, 1000),
            'lineDescription' => $this->faker->sentence(),
            'branchNumber' => $this->faker->word(),
            'note' => $this->faker->word(),
            'attachments' => [],
        ];
    }

    protected function modelClass(): string
    {
        return SalesOrderLineDto::class;
    }
}
