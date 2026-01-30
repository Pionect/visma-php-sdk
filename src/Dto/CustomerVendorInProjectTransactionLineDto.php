<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Customer/supplier &gt; The name of the supplier (if the transaction originated in the Supplier
 * ledger workspace) or customer (if the transaction originated in another workspace).
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerVendorInProjectTransactionLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerVendorInProjectTransactionLineDtoFactory testFactory()
 */
class CustomerVendorInProjectTransactionLineDto extends Model
{
    public function __construct(
        public ?int $internalId = null,
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
