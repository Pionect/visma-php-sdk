<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The table &gt; VAT code &gt; The VAT code based on which the taxable amount is calculated.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VatCodeInJournalTransactionLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VatCodeInJournalTransactionLineDtoFactory testFactory()
 */
class VatCodeInJournalTransactionLineDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
