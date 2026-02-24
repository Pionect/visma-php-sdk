<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\PurchaseOrderDto;
use Pionect\VismaSdk\Enums\PurchaseOrderLineOrderTypeEnum;
use Pionect\VismaSdk\Enums\PurchaseOrderShippingDestinationTypeEnum;
use Pionect\VismaSdk\Enums\PurchaseOrderStatusEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\PurchaseOrderDto>
 */
class PurchaseOrderDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'shippingDestinationType' => $this->faker->randomElement(PurchaseOrderShippingDestinationTypeEnum::cases()),
            'shipTo' => null,
            'shippingLocation' => null,
            'warehouse' => null,
            'shippingContact' => null,
            'shippingAddress' => null,
            'fobPoint' => $this->faker->word(),
            'shipVia' => $this->faker->word(),
            'shipTerms' => $this->faker->word(),
            'remitContact' => null,
            'remitAddress' => null,
            'terms' => null,
            'supplierVatZone' => null,
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
            'openQuantity' => null,
            'openBalance' => null,
            'orderType' => $this->faker->randomElement(PurchaseOrderLineOrderTypeEnum::cases()),
            'orderNbr' => $this->faker->word(),
            'hold' => $this->faker->boolean(),
            'status' => $this->faker->randomElement(PurchaseOrderStatusEnum::cases()),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'promisedOn' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'description' => $this->faker->sentence(),
            'supplier' => null,
            'location' => null,
            'owner' => null,
            'currency' => $this->faker->word(),
            'supplierRef' => $this->faker->word(),
            'exchangeRate' => null,
            'lineTotal' => null,
            'lineTotalInBaseCurrency' => null,
            'vatExemptTotal' => null,
            'vatExemptTotalInBaseCurrency' => null,
            'taxTotal' => null,
            'taxTotalInBaseCurrency' => null,
            'orderTotal' => null,
            'orderTotalInBaseCurrency' => null,
            'controlTotal' => null,
            'controlTotalInBaseCurrency' => null,
            'branch' => null,
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
            'customDec1' => null,
            'customDec2' => null,
            'customInt1' => $this->faker->numberBetween(1, 100),
            'customInt2' => $this->faker->numberBetween(1, 100),
            'customDateTimeUtc1' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'timeStamp' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PurchaseOrderDto::class;
    }
}
