<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\SalesOrderUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SalesOrderUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'project' => $this->faker->numberBetween(1, 100),
            'printDescriptionOnInvoice' => $this->faker->boolean(),
            'printNoteOnExternalDocuments' => $this->faker->boolean(),
            'printNoteOnInternalDocuments' => $this->faker->boolean(),
            'soBillingContact' => $this->faker->word(),
            'soBillingAddress' => $this->faker->word(),
            'customerVatzone' => $this->faker->word(),
            'invoiceSeparately' => $this->faker->boolean(),
            'terms' => $this->faker->word(),
            'salesPerson' => $this->faker->word(),
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
            'transactionType' => $this->faker->numberBetween(1, 100),
            'paymentMethod' => $this->faker->word(),
            'cashAccount' => $this->faker->word(),
            'paymentRef' => $this->faker->word(),
            'isRotRutDeductible' => $this->faker->boolean(),
            'emailed' => $this->faker->boolean(),
            'rotRutDetails' => RotRutUpdateDtoFactory::new()->make(),
            'lines' => [],
            'orderType' => OrderTypeInSalesOrderUpdateDtoFactory::new()->make(),
            'orderNumber' => $this->faker->word(),
            'hold' => $this->faker->boolean(),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'requestOn' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'customerOrder' => $this->faker->word(),
            'customerRefNo' => $this->faker->word(),
            'customer' => CustomerInSalesOrderUpdateDtoFactory::new()->make(),
            'location' => $this->faker->word(),
            'contactId' => $this->faker->numberBetween(1, 1000),
            'gln' => GlnInSalesOrderUpdateDtoFactory::new()->make(),
            'vatRegistrationId' => VatRegistrationIdInSalesOrderUpdateDtoFactory::new()->make(),
            'currency' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'recalculateShipment' => $this->faker->boolean(),
            'branchNumber' => $this->faker->word(),
            'note' => $this->faker->word(),
            'overrideNumberSeries' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return SalesOrderUpdateDto::class;
    }
}
