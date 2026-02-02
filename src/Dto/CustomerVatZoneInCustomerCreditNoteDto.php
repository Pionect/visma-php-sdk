<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The Financial details tab &gt; The VAT info section &gt; Customer VAT zone
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerVatZoneInCustomerCreditNoteDtoFactory testFactory()
 */
class CustomerVatZoneInCustomerCreditNoteDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
