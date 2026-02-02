<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Earning type &gt; The type of the work time spent by the employee
 *
 * @method static \Pionect\VismaSdk\Factories\EarningTypeInTimeCardSummaryDtoFactory testFactory()
 */
class EarningTypeInTimeCardSummaryDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

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
