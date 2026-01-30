<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The work time reported for Saturday, including overtime.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SatInTimeCardSummaryUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SatInTimeCardSummaryUpdateDtoFactory factory()
 */
class SatInTimeCardSummaryUpdateDto extends Model
{
    public function __construct(
        public ?int $value = null,
    ) {}
}
