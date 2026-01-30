<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * VAT category &gt; The VAT category (if applied) for the transaction. The category represents the
 * type of goods or services.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VatCodeInCustomerCreditNoteLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VatCodeInCustomerCreditNoteLineDtoFactory testFactory()
 */
class VatCodeInCustomerCreditNoteLineDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
