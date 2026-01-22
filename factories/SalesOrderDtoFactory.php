<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\SalesOrderDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SalesOrderDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'projectCd' => $this->faker->word(),
            'printDescriptionOnInvoice' => $this->faker->boolean(),
            'printNoteOnExternalDocuments' => $this->faker->boolean(),
            'printNoteOnInternalDocuments' => $this->faker->boolean(),
            'soBillingContact' => $this->faker->word(),
            'soBillingAddress' => $this->faker->word(),
            'customerVatzone' => $this->faker->word(),
            'invoiceSeparately' => $this->faker->boolean(),
            'invoiceNbr' => $this->faker->word(),
            'invoiceDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'terms' => $this->faker->word(),
            'dueDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'cashDiscountDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'postPeriod' => $this->faker->word(),
            'salesPerson' => $this->faker->word(),
            'commissionPercent' => $this->faker->word(),
            'commissionAmount' => $this->faker->word(),
            'commissionableAmount' => $this->faker->word(),
            'owner' => $this->faker->word(),
            'origOrderType' => $this->faker->word(),
            'origOrderNbr' => $this->faker->word(),
            'soShippingContact' => $this->faker->word(),
            'soShippingAddress' => $this->faker->word(),
            'schedShipment' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'shipSeparately' => $this->faker->boolean(),
            'shipComplete' => $this->faker->word(),
            'cancelBy' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'canceled' => $this->faker->boolean(),
            'preferredWarehouse' => $this->faker->word(),
            'shipVia' => $this->faker->word(),
            'fobPoint' => $this->faker->word(),
            'priority' => $this->faker->numberBetween(1, 100),
            'shippingTerms' => $this->faker->word(),
            'shippingZone' => $this->faker->word(),
            'residentialDelivery' => $this->faker->boolean(),
            'saturdayDelivery' => $this->faker->boolean(),
            'insurance' => $this->faker->boolean(),
            'transactionType' => $this->faker->word(),
            'paymentMethod' => $this->faker->word(),
            'cashAccount' => $this->faker->word(),
            'paymentRef' => $this->faker->word(),
            'isRotRutDeductible' => $this->faker->boolean(),
            'emailed' => $this->faker->boolean(),
            'lines' => [],
            'shipments' => [],
            'orderType' => $this->faker->word(),
            'orderNo' => $this->faker->word(),
            'status' => $this->faker->word(),
            'hold' => $this->faker->boolean(),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'requestOn' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'customerOrder' => $this->faker->word(),
            'customerRefNo' => $this->faker->word(),
            'customer' => $this->faker->word(),
            'contactId' => $this->faker->numberBetween(1, 1000),
            'location' => $this->faker->word(),
            'currency' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'orderTotal' => $this->faker->randomFloat(2, 0, 1000),
            'orderTotalInBaseCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'vatTaxableTotal' => $this->faker->randomFloat(2, 0, 1000),
            'vatTaxableTotalInBaseCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'vatExemptTotal' => $this->faker->randomFloat(2, 0, 1000),
            'vatExemptTotalInBaseCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'taxTotal' => $this->faker->randomFloat(2, 0, 1000),
            'taxTotalInBaseCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'exchangeRate' => $this->faker->randomFloat(2, 0, 1000),
            'discountTotal' => $this->faker->randomFloat(2, 0, 1000),
            'discountTotalInBaseCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'branchNumber' => $this->faker->word(),
            'note' => $this->faker->word(),
            'attachments' => [],
            'errorInfo' => $this->faker->word(),
            'metadata' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SalesOrderDto::class;
    }
}
