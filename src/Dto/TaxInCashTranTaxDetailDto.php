<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: VAT ID &gt; The VAT that applies to the cash transaction.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TaxInCashTranTaxDetailDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TaxInCashTranTaxDetailDtoFactory factory()
 */
class TaxInCashTranTaxDetailDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $description = null,
    ) {}
}
