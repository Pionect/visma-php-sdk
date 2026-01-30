<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The type of the work time spent by the employee
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\EarningTypeInTimeCardSummaryUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\EarningTypeInTimeCardSummaryUpdateDtoFactory factory()
 */
class EarningTypeInTimeCardSummaryUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
