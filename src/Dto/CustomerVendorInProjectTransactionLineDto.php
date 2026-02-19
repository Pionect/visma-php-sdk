<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Customer/supplier &gt; The name of the supplier (if the transaction originated in the Supplier
 * ledger workspace) or customer (if the transaction originated in another workspace).
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerVendorInProjectTransactionLineDtoFactory testFactory()
 */
class CustomerVendorInProjectTransactionLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $internalId = null,
        /** The identifier of the particular destination of the selected type. */
        public ?string $number = null,
        /** The name of the particular destination of the selected type. */
        public ?string $name = null,
    ) {}
}
