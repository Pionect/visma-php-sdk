<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The name of the supplier
 */
class SupplierInSupplierPobalanceDto extends Model
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
