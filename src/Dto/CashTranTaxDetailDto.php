<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CashTranTaxDetailDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CashTranTaxDetailDtoFactory testFactory()
 */
class CashTranTaxDetailDto extends Model
{
    public function __construct(
        public ?TaxInCashTranTaxDetailDto $tax = null,
        public int|float|null $taxRate = null,
        public int|float|null $taxableAmount = null,
        public int|float|null $taxAmount = null,
        public int|float|null $deductibleTaxRate = null,
        public int|float|null $expenseAmount = null,
        public ?bool $includeInVatExemptTotal = null,
        public ?bool $pendingVat = null,
        public ?bool $statisticalVat = null,
        public ?bool $reverseVat = null,
        public ?string $taxType = null,
    ) {}
}
