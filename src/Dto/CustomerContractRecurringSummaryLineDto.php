<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\CustomerContractRecurringSummaryLineInvoiceTypeEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a CustomerContractRecurringSummaryLine in CustomerContractController. Used for
 * getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerContractRecurringSummaryLineDtoFactory testFactory()
 */
class CustomerContractRecurringSummaryLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $itemCode = null,
        public ?string $description = null,
        public ?string $itemId = null,
        public ?string $uom = null,
        public ?CustomerContractRecurringSummaryLineInvoiceTypeEnum $invoiceType = null,
        public int|float|null $included = null,
        public int|float|null $recurringPrice = null,
        public int|float|null $recurringDiscount = null,
        public int|float|null $extraUsagePrice = null,
        public int|float|null $unInvoiced = null,
        public int|float|null $usedTotal = null,
    ) {}
}
