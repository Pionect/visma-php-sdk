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
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
