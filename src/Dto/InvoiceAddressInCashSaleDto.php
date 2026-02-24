<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The Invoice address tab &gt; The Invoice address section.
 *
 * @method static \Pionect\VismaSdk\Factories\InvoiceAddressInCashSaleDtoFactory testFactory()
 */
class InvoiceAddressInCashSaleDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\InvoiceAddressInCashSaleDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $addressId = null,
        /** Address 1 > The first line of the customer's contact address. */
        public ?string $addressLine1 = null,
        /** Address 2 > The second line of the address. */
        public ?string $addressLine2 = null,
        /** Address 3 > The third line of the address. */
        public ?string $addressLine3 = null,
        /** Postcode > The postcode. */
        public ?string $postalCode = null,
        /** City > The city. */
        public ?string $city = null,
        public ?CountryInCustomerDocumentAddressDto $country = null,
        public ?CountyInCustomerDocumentAddressDto $county = null,
        /**
         * Override address > A check box that indicates (if selected) that the invoice
         * address is not the default invoice address of the customer.
         */
        public ?bool $overrideAddress = null,
    ) {}
}
