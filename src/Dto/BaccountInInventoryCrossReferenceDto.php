<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: Supplier/Customer*, click magnifier &gt; Account ID &gt; Account no. identifying
 * the business account.
 */
class BaccountInInventoryCrossReferenceDto extends Model
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
