<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CashTranTaxDetailDtoFactory testFactory()
 */
class CashTranTaxDetailDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

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
