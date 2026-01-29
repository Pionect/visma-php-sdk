<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Customer/supplier &gt; The name of the supplier (if the transaction originated in the Supplier
 * ledger workspace) or customer (if the transaction originated in another workspace).
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerVendorInProjectTransactionLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerVendorInProjectTransactionLineDtoFactory factory()
 */
class CustomerVendorInProjectTransactionLineDto extends Model
{
    #[Property]
    public ?int $internalId;

    /** The identifier of the particular destination of the selected type. */
    #[Property]
    public ?string $number;

    /** The name of the particular destination of the selected type. */
    #[Property]
    public ?string $name;
}
