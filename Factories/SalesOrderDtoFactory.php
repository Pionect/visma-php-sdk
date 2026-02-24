<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\SalesOrderDto;
use Pionect\VismaSdk\Enums\SalesOrderLineShipCompleteEnum;
use Pionect\VismaSdk\Enums\SalesOrderQueryParametersStatusEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\SalesOrderDto>
 */
class SalesOrderDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'projectCd' => $this->faker->word(),
            'printDescriptionOnInvoice' => $this->faker->boolean(),
            'printNoteOnExternalDocuments' => $this->faker->boolean(),
            'printNoteOnInternalDocuments' => $this->faker->boolean(),
            'soBillingContact' => null,
            'soBillingAddress' => null,
            'customerVatzone' => null,
            'invoiceSeparately' => $this->faker->boolean(),
            'invoiceNbr' => $this->faker->word(),
            'invoiceDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'terms' => null,
            'dueDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'cashDiscountDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'postPeriod' => $this->faker->word(),
            'salesPerson' => null,
            'commissionPercent' => $this->faker->word(),
            'commissionAmount' => $this->faker->word(),
            'commissionableAmount' => $this->faker->word(),
            'owner' => null,
            'origOrderType' => $this->faker->word(),
            'origOrderNbr' => $this->faker->word(),
            'soShippingContact' => null,
            'soShippingAddress' => null,
            'schedShipment' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'shipSeparately' => $this->faker->boolean(),
            'shipComplete' => $this->faker->randomElement(SalesOrderLineShipCompleteEnum::cases()),
            'cancelBy' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'canceled' => $this->faker->boolean(),
            'preferredWarehouse' => null,
            'shipVia' => null,
            'fobPoint' => null,
            'priority' => $this->faker->numberBetween(1, 100),
            'shippingTerms' => null,
            'shippingZone' => null,
            'residentialDelivery' => $this->faker->boolean(),
            'saturdayDelivery' => $this->faker->boolean(),
            'insurance' => $this->faker->boolean(),
            'transactionType' => null,
            'paymentMethod' => null,
            'cashAccount' => $this->faker->word(),
            'paymentRef' => $this->faker->word(),
            'isRotRutDeductible' => $this->faker->boolean(),
            'emailed' => $this->faker->boolean(),
            'lines' => [],
            'shipments' => [],
            'orderType' => $this->faker->word(),
            'orderNo' => $this->faker->word(),
            'status' => $this->faker->randomElement(SalesOrderQueryParametersStatusEnum::cases()),
            'hold' => $this->faker->boolean(),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'requestOn' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'customerOrder' => $this->faker->word(),
            'customerRefNo' => $this->faker->word(),
            'customer' => null,
            'contactId' => $this->faker->numberBetween(1, 1000),
            'location' => null,
            'currency' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'orderTotal' => null,
            'orderTotalInBaseCurrency' => null,
            'vatTaxableTotal' => null,
            'vatTaxableTotalInBaseCurrency' => null,
            'vatExemptTotal' => null,
            'vatExemptTotalInBaseCurrency' => null,
            'taxTotal' => null,
            'taxTotalInBaseCurrency' => null,
            'exchangeRate' => null,
            'discountTotal' => null,
            'discountTotalInBaseCurrency' => null,
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'branchNumber' => $this->faker->word(),
            'note' => $this->faker->word(),
            'attachments' => [],
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SalesOrderDto::class;
    }
}
