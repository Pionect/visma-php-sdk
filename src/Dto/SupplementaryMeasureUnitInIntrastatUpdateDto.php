<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The requirement for Supplementary Measure Units applies only to certain classes of goods(NC8
 * Positions)
 * that may be expressed from quantitative point of view in other measurement units but
 * kilo also.
 */
class SupplementaryMeasureUnitInIntrastatUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
