<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The table &gt; VAT ID &gt; The VAT used to calculate the VAT amount.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VatInJournalTransactionLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VatInJournalTransactionLineDtoFactory factory()
 */
class VatInJournalTransactionLineDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
