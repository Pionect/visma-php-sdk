<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierPobalanceDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierPobalanceDtoFactory factory()
 */
class SupplierPobalanceDto extends Model
{
    public function __construct(
        public ?SupplierInSupplierPobalanceDto $supplier = null,
        #[MapName('totalPOOnHoldOrderTotal')]
        public int|float|null $totalPoonHoldOrderTotal = null,
        #[MapName('totalPOOnHoldLineTotal')]
        public int|float|null $totalPoonHoldLineTotal = null,
        #[MapName('totalOpenPOOrderTotal')]
        public int|float|null $totalOpenPoorderTotal = null,
        #[MapName('totalOpenPOLineTotal')]
        public int|float|null $totalOpenPolineTotal = null,
        #[MapName('totalClosedPOOrderTotal')]
        public int|float|null $totalClosedPoorderTotal = null,
        #[MapName('totalClosedPOLineTotal')]
        public int|float|null $totalClosedPolineTotal = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
    ) {}
}
