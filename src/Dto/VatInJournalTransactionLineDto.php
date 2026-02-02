<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The table &gt; VAT ID &gt; The VAT used to calculate the VAT amount.
 *
 * @method static \Pionect\VismaSdk\Factories\VatInJournalTransactionLineDtoFactory testFactory()
 */
class VatInJournalTransactionLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
