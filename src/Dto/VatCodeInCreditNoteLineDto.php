<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * VAT category &gt; The VAT category (if applied) for the transaction. The category represents the
 * type of goods or services.
 *
 * @method static \Pionect\VismaSdk\Factories\VatCodeInCreditNoteLineDtoFactory testFactory()
 */
class VatCodeInCreditNoteLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
