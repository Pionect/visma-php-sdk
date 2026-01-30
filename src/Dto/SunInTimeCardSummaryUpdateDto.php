<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The work time reported for Sunday, including overtime.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SunInTimeCardSummaryUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SunInTimeCardSummaryUpdateDtoFactory factory()
 */
class SunInTimeCardSummaryUpdateDto extends Model
{
    public function __construct(
        public ?int $value = null,
    ) {}
}
