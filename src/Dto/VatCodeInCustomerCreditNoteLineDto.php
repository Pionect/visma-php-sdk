<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * VAT category &gt; The VAT category (if applied) for the transaction. The category represents the
 * type of goods or services.
 *
 * @method static \Pionect\VismaSdk\Factories\VatCodeInCustomerCreditNoteLineDtoFactory testFactory()
 */
class VatCodeInCustomerCreditNoteLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
