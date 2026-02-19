<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: VAT ID &gt; The VAT that applies to the cash transaction.
 *
 * @method static \Pionect\VismaSdk\Factories\TaxInCashTranTaxDetailDtoFactory testFactory()
 */
class TaxInCashTranTaxDetailDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Number of item */
        public ?string $number = null,
        /** Name of item/description */
        public ?string $description = null,
    ) {}
}
