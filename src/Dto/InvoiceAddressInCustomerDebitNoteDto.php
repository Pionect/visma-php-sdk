<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Invoice address tab &gt; The Invoice address section.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InvoiceAddressInCustomerDebitNoteDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InvoiceAddressInCustomerDebitNoteDtoFactory testFactory()
 */
class InvoiceAddressInCustomerDebitNoteDto extends Model
{
    public function __construct(
        public ?int $addressId = null,
        public ?string $addressLine1 = null,
        public ?string $addressLine2 = null,
        public ?string $addressLine3 = null,
        public ?string $postalCode = null,
        public ?string $city = null,
        public ?CountryInCustomerDocumentAddressDto $country = null,
        public ?CountyInCustomerDocumentAddressDto $county = null,
        public ?bool $overrideAddress = null,
    ) {}
}
