<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Earning type &gt; The type of the work time spent by the employee
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\EarningTypeInTimeCardSummaryDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\EarningTypeInTimeCardSummaryDtoFactory testFactory()
 */
class EarningTypeInTimeCardSummaryDto extends Model
{
    public function __construct(
        public ?string $code = null,
        public ?string $description = null,
        public ?bool $isOvertime = null,
        public ?bool $isBillable = null,
        public ?bool $isActive = null,
        public int|float|null $overtimeMultiplier = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
    ) {}
}
