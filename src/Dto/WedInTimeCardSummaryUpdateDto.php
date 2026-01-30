<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The work time reported for Wednesday, including overtime.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\WedInTimeCardSummaryUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\WedInTimeCardSummaryUpdateDtoFactory factory()
 */
class WedInTimeCardSummaryUpdateDto extends Model
{
    public function __construct(
        public ?int $value = null,
    ) {}
}
