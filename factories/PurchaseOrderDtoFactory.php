<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\PurchaseOrderDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PurchaseOrderDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'shippingDestinationType' => $this->faker->word(),
            'shipTo' => $this->faker->word(),
            'shippingLocation' => $this->faker->word(),
            'warehouse' => $this->faker->word(),
            'shippingContact' => $this->faker->word(),
            'shippingAddress' => $this->faker->word(),
            'fobPoint' => $this->faker->word(),
            'shipVia' => $this->faker->word(),
            'shipTerms' => $this->faker->word(),
            'remitContact' => $this->faker->word(),
            'remitAddress' => $this->faker->word(),
            'terms' => $this->faker->word(),
            'supplierVatZone' => $this->faker->word(),
            'discountDetails' => [],
            'salesOrderType' => $this->faker->word(),
            'salesOrderNbr' => $this->faker->word(),
            'requisitionRefNbr' => $this->faker->word(),
            'paymentRefNbr' => $this->faker->word(),
            'workgroupId' => $this->faker->numberBetween(1, 1000),
            'dontPrint' => $this->faker->boolean(),
            'printed' => $this->faker->boolean(),
            'dontEmail' => $this->faker->boolean(),
            'emailed' => $this->faker->boolean(),
            'openQuantity' => $this->faker->randomFloat(2, 0, 1000),
            'openBalance' => $this->faker->randomFloat(2, 0, 1000),
            'orderType' => $this->faker->word(),
            'orderNbr' => $this->faker->word(),
            'hold' => $this->faker->boolean(),
            'status' => $this->faker->word(),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'promisedOn' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'description' => $this->faker->sentence(),
            'supplier' => $this->faker->word(),
            'location' => $this->faker->word(),
            'owner' => $this->faker->word(),
            'currency' => $this->faker->word(),
            'supplierRef' => $this->faker->word(),
            'exchangeRate' => $this->faker->randomFloat(2, 0, 1000),
            'lineTotal' => $this->faker->randomFloat(2, 0, 1000),
            'lineTotalInBaseCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'vatExemptTotal' => $this->faker->randomFloat(2, 0, 1000),
            'vatExemptTotalInBaseCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'taxTotal' => $this->faker->randomFloat(2, 0, 1000),
            'taxTotalInBaseCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'orderTotal' => $this->faker->randomFloat(2, 0, 1000),
            'orderTotalInBaseCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'controlTotal' => $this->faker->randomFloat(2, 0, 1000),
            'controlTotalInBaseCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'branch' => $this->faker->word(),
            'lines' => [],
            'taxDetails' => [],
            'purchaseReceipts' => [],
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'note' => $this->faker->word(),
            'customStr1' => $this->faker->word(),
            'customStr2' => $this->faker->word(),
            'customStr3' => $this->faker->word(),
            'customStr4' => $this->faker->word(),
            'customStr5' => $this->faker->word(),
            'customDec1' => $this->faker->randomFloat(2, 0, 1000),
            'customDec2' => $this->faker->randomFloat(2, 0, 1000),
            'customInt1' => $this->faker->numberBetween(1, 100),
            'customInt2' => $this->faker->numberBetween(1, 100),
            'customDateTimeUtc1' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'timeStamp' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'errorInfo' => $this->faker->word(),
            'metadata' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PurchaseOrderDto::class;
    }
}
