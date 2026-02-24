<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\SupplierPobalanceDtoFactory testFactory()
 */
class SupplierPobalanceDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\SupplierPobalanceDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?SupplierInSupplierPobalanceDto $supplier = null,
        /** The total amount of order on hold */
        #[MapName('totalPOOnHoldOrderTotal')]
        public int|float|null $totalPoonHoldOrderTotal = null,
        /** The total amount of the order line on hold */
        #[MapName('totalPOOnHoldLineTotal')]
        public int|float|null $totalPoonHoldLineTotal = null,
        /** The total open amount of the order */
        #[MapName('totalOpenPOOrderTotal')]
        public int|float|null $totalOpenPoorderTotal = null,
        /** The total open amount of the order line */
        #[MapName('totalOpenPOLineTotal')]
        public int|float|null $totalOpenPolineTotal = null,
        /** The total closed amount of the order */
        #[MapName('totalClosedPOOrderTotal')]
        public int|float|null $totalClosedPoorderTotal = null,
        /** The total closed amount of the order line */
        #[MapName('totalClosedPOLineTotal')]
        public int|float|null $totalClosedPolineTotal = null,
        /** The date and time when the purchase order was last modified. */
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
    ) {}
}
