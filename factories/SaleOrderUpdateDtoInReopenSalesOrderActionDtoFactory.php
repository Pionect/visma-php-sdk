<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SaleOrderUpdateDtoInReopenSalesOrderActionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SaleOrderUpdateDtoInReopenSalesOrderActionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'project' => $this->faker->word(),
            'printDescriptionOnInvoice' => $this->faker->sentence(),
            'printNoteOnExternalDocuments' => $this->faker->word(),
            'printNoteOnInternalDocuments' => $this->faker->word(),
            'soBillingContact' => $this->faker->word(),
            'soBillingAddress' => $this->faker->word(),
            'customerVatzone' => $this->faker->word(),
            'invoiceSeparately' => $this->faker->word(),
            'terms' => $this->faker->word(),
            'salesPerson' => $this->faker->word(),
            'owner' => $this->faker->word(),
            'origOrderType' => $this->faker->word(),
            'origOrderNbr' => $this->faker->word(),
            'soShippingContact' => $this->faker->word(),
            'soShippingAddress' => $this->faker->word(),
            'schedShipment' => $this->faker->word(),
            'shipSeparately' => $this->faker->word(),
            'shipComplete' => $this->faker->word(),
            'cancelBy' => $this->faker->word(),
            'canceled' => $this->faker->word(),
            'preferredWarehouse' => $this->faker->word(),
            'shipVia' => $this->faker->word(),
            'fobPoint' => $this->faker->word(),
            'priority' => $this->faker->word(),
            'shippingTerms' => $this->faker->word(),
            'shippingZone' => $this->faker->word(),
            'residentialDelivery' => $this->faker->word(),
            'saturdayDelivery' => $this->faker->word(),
            'insurance' => $this->faker->word(),
            'transactionType' => $this->faker->word(),
            'paymentMethod' => $this->faker->word(),
            'cashAccount' => $this->faker->word(),
            'paymentRef' => $this->faker->word(),
            'isRotRutDeductible' => $this->faker->word(),
            'emailed' => $this->faker->safeEmail(),
            'rotRutDetails' => $this->faker->word(),
            'lines' => [],
            'orderType' => $this->faker->word(),
            'orderNumber' => $this->faker->word(),
            'hold' => $this->faker->word(),
            'date' => $this->faker->word(),
            'requestOn' => $this->faker->word(),
            'customerOrder' => $this->faker->word(),
            'customerRefNo' => $this->faker->word(),
            'customer' => $this->faker->word(),
            'location' => $this->faker->word(),
            'contactId' => $this->faker->word(),
            'gln' => $this->faker->word(),
            'vatRegistrationId' => $this->faker->word(),
            'currency' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'recalculateShipment' => $this->faker->word(),
            'branchNumber' => $this->faker->word(),
            'note' => $this->faker->word(),
            'overrideNumberSeries' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SaleOrderUpdateDtoInReopenSalesOrderActionDto::class;
    }
}
