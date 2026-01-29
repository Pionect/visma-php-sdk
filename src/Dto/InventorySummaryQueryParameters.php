<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InventorySummaryQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InventorySummaryQueryParametersFactory factory()
 */
class InventorySummaryQueryParameters extends Model
{
    #[Property]
    public ?string $warehouse;

    #[Property]
    public ?string $location;
}
