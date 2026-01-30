<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The work time reported for Tuesday, including overtime.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TueInTimeCardSummaryUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TueInTimeCardSummaryUpdateDtoFactory factory()
 */
class TueInTimeCardSummaryUpdateDto extends Model
{
    public function __construct(
        public ?int $value = null,
    ) {}
}
