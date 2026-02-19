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
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
