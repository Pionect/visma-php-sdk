<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\DtoDimensionFactory testFactory()
 */
class DtoDimension extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * Mandatory field: The top part > Segment key ID* > The ID of the segmented
         * key. ACCGROUP, ACCOUNT, BIZACCT, CASHACCOUNT, CONTRACT, CONTRACTITEM,
         * CUSTOMER, EMPLOYEE, INLOCATION, INSITE, INSUBITEM, INVENTORY, LOCATION,
         * MLISTCD, PROJECT, PROTASK, SALESPER, SUBACCOUNT, TMCONTRACT, SUPLLIER
         */
        public ?string $id = null,
        /** The top part > Length > The total length of the key. */
        public ?int $length = null,
        /**
         * Mandatory field: The top part > Description* > A detailed description of the
         * segmented key.
         */
        public ?string $description = null,
        /**
         * @var DtoSegment[]|null
         */
        public ?array $segments = null,
    ) {}
}
