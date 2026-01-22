<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\SalesOrderLineUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SalesOrderLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'invoiceNbr' => $this->faker->word(),
            'salesOrderOperation' => $this->faker->word(),
            'freeItem' => $this->faker->word(),
            'requestedOn' => $this->faker->word(),
            'shipOn' => $this->faker->word(),
            'shipComplete' => $this->faker->word(),
            'undershipThreshold' => $this->faker->word(),
            'overshipThreshold' => $this->faker->word(),
            'completed' => $this->faker->word(),
            'markForPo' => $this->faker->word(),
            'poSource' => $this->faker->word(),
            'lotSerialNbr' => $this->faker->word(),
            'expirationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'reasonCode' => $this->faker->word(),
            'salesPerson' => $this->faker->word(),
            'taxCategory' => $this->faker->word(),
            'commissionable' => $this->faker->word(),
            'alternateId' => $this->faker->word(),
            'projectTask' => $this->faker->word(),
            'subaccount' => [],
            'externalLink' => $this->faker->word(),
            'isRotRutDeductible' => $this->faker->word(),
            'branchNumber' => $this->faker->word(),
            'operation' => $this->faker->word(),
            'lineNbr' => $this->faker->word(),
            'inventoryId' => $this->faker->word(),
            'inventoryNumber' => $this->faker->word(),
            'warehouse' => $this->faker->word(),
            'uom' => $this->faker->word(),
            'quantity' => $this->faker->word(),
            'unitCost' => $this->faker->word(),
            'unitPrice' => $this->faker->word(),
            'discountPercent' => $this->faker->word(),
            'discountAmount' => $this->faker->word(),
            'discountCode' => $this->faker->word(),
            'manualDiscount' => $this->faker->word(),
            'discUnitPrice' => $this->faker->word(),
            'lineDescription' => $this->faker->sentence(),
            'note' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SalesOrderLineUpdateDto::class;
    }
}
