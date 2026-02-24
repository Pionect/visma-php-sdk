<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The Financial details tab &gt; The VAT info section &gt; Customer VAT zone &gt; If the invoice was
 * created from an opportunity that has a VAT zone specified, the VAT zone specified for the
 * opportunity.
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerVatZoneInCustomerCreditWriteOffDtoFactory testFactory()
 */
class CustomerVatZoneInCustomerCreditWriteOffDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\CustomerVatZoneInCustomerCreditWriteOffDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
