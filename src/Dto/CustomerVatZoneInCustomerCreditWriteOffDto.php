<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Financial details tab &gt; The VAT info section &gt; Customer VAT zone &gt; If the invoice was
 * created from an opportunity that has a VAT zone specified, the VAT zone specified for the
 * opportunity.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerVatZoneInCustomerCreditWriteOffDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerVatZoneInCustomerCreditWriteOffDtoFactory factory()
 */
class CustomerVatZoneInCustomerCreditWriteOffDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
