<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The requirement for Supplementary Measure Units applies only to certain classes of goods(NC8
 * Positions)
 * that may be expressed from quantitative point of view in other measurement units but
 * kilo also.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplementaryMeasureUnitInIntrastatUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplementaryMeasureUnitInIntrastatUpdateDtoFactory factory()
 */
class SupplementaryMeasureUnitInIntrastatUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
